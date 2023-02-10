<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CategoryFormRequest;

class CategoryController extends Controller
{
   public function index(){

    $category = Category::all();
    return view('admin.category.index',compact('category'));

   }
   public function create_category(){

    return view('admin.category.create');

   }

   public function store(CategoryFormRequest $request){

    try{
    $data = $request->validated();

    $category = new Category();

    $category->name = $data['name'];
    $category->slug = Str::slug($data['slug']);
    $category->description = $data['description'];

    if($request->hasfile('image'))
      {
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('Image/category'), $filename);
        $category->image = $filename;
      }

    $category->meta_title = $data['meta_title'];
    $category->meta_description = $data['meta_description'];
    $category->meta_keyword = $data['meta_keyword'];

    $category->navbar_status = $request->navbar_status == true ? '1':'0';
    $category->status =$request->status == true ? '1':'0';
    $category->create_by= Auth::user()->id;

    $category->save();
    return redirect('admin/category')->with('message','Cateory added successfully');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
   }

   public function edit($id){

    $category =  Category::find($id);
    return view('admin.category.edit',compact('category'));

   }

   public function update(CategoryFormRequest $request,$id){

    try {
    $data = $request->validated();

    $category =  Category::find($id);

    $category->name = $data['name'];
    $category->slug = Str::slug($data['slug']);
    $category->description = $data['description'];

    if($request->hasfile('image'))
      {
        $destination = public_path('Image/category/'.$category->image);
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('Image/category'), $filename);
        $category->image = $filename;
      }

    $category->meta_title = $data['meta_title'];
    $category->meta_description = $data['meta_description'];
    $category->meta_keyword = $data['meta_keyword'];

    $category->navbar_status = $request->navbar_status == true ? '1':'0';
    $category->status =$request->status == true ? '1':'0';
    $category->create_by= Auth::user()->id;

    $category->update();
    return redirect('admin/category')->with('message','Cateory update successfully');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
   }

   public function destory(Request $request ){
    try {
    $category = Category::find($request->category_delete_id);

    $destination = 'Image/category/'.$category->image;
    if(File::exists($destination))
    {
        File::delete($destination);
    }

    $category->posts()->delete();
    $category->delete();

    return  redirect()->back()->with('message', 'Category with its posts are  deleted');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}

}
