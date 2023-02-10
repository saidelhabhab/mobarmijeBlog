<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\PostFormRequest;

class PostController extends Controller
{
   public function index(){
    $posts = Post::all();

    return view('admin.post.index',compact('posts'));
   }

   public function create_post(){

    $Category = Category::where('status','0')->get();
    return view('admin.post.create',compact('Category'));
   }


   public function store(PostFormRequest $request){

    try{
    $data = $request->validated();

    $post = new Post();

    $post->category_id = $data['category_id'];
    $post->name = $data['name'];
    $post->slug = Str::slug($data['slug']);
    if($request->hasfile('image'))
      {
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('Image/post'), $filename);
        $post->image = $filename;
      }
    $post->description = $data['description'];
    $post->yt_iframe = $data['yt_iframe'];
    $post->meta_title = $data['meta_title'];
    $post->meta_description = $data['meta_description'];
    $post->meta_keyword = $data['meta_keyword'];

    $post->status =$request->status == true ? '1':'0';
    $post->create_by= Auth::user()->id;

    $post->save();
    return redirect('admin/post')->with('message','Post added successfully');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
   }



   public function edit($id){
    $category = Category::where('status','0')->get();
    $post =  Post::find($id);
    return view('admin.post.edit',compact('post','category'));

   }

   public function update(PostFormRequest $request,$id){

    try {
    $data = $request->validated();

    $post =  Post::find($id);

    $post->category_id = $data['category_id'];
    $post->name = $data['name'];
    $post->slug = Str::slug($data['slug']);

    if($request->hasfile('image'))
    {
      $destination = public_path('Image/post/'.$post->image);
      if(File::exists($destination))
      {
          File::delete($destination);
      }
      $file= $request->file('image');
      $filename= date('YmdHi').$file->getClientOriginalName();
      $file-> move(public_path('Image/post'), $filename);
      $post->image = $filename;
    }

    $post->description = $data['description'];
    $post->yt_iframe = $data['yt_iframe'];

    $post->meta_title = $data['meta_title'];
    $post->meta_description = $data['meta_description'];
    $post->meta_keyword = $data['meta_keyword'];

    $post->status =$request->status == true ? '1':'0';
    $post->create_by= Auth::user()->id;

    $post->update();
    return redirect('admin/post')->with('message','Post update successfully');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
   }

   public function destory($id){
    try {
    $post = Post::findOrFail($id);
    $post->delete();

    return  redirect()->back()->with('message', 'Post deleted');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
