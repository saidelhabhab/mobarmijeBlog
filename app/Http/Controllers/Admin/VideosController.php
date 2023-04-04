<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\VideoFormRequest;

class VideosController extends Controller
{
    public function index(){
        $videos = Videos::all();

        return view('admin.videos.index',compact('videos'));
    }

    public function create_video(){

    $videos = Videos::where('status','0')->get();
    return view('admin.videos.create',compact('videos'));
    }


    public function store(VideoFormRequest $request){

        try{
        $data = $request->validated();

        $video = new Videos();

        $video->name = $data['name'];
        $video->yt_iframe = $data['yt_iframe'];

        if($request->hasfile('image'))
          {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image/videos'), $filename);
            $video->image = $filename;
          }
        $video->description = $data['description'];


        $video->status =$request->status == true ? '1':'0';
        $video->create_by= Auth::user()->id;

        $video->save();
        return redirect('admin/videos')->with('message','Videos added successfully');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
       }



       public function edit($id){
        $video = Videos::find($id);
        return view('admin.videos.edit',compact('video'));

       }

       public function update(VideoFormRequest $request,$id){

        try {
        $data = $request->validated();

        $video =  Videos::find($id);


        $video->name = $data['name'];
        $video->yt_iframe = $data['yt_iframe'];

        if($request->hasfile('image'))
        {
          $destination = public_path('Image/videos/'.$video->image);
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file= $request->file('image');
          $filename= date('YmdHi').$file->getClientOriginalName();
          $file-> move(public_path('Image/videos'), $filename);
          $video->image = $filename;
        }

        $video->description = $data['description'];


        $video->status =$request->status == true ? '1':'0';
        $video->create_by= Auth::user()->id;

        $video->update();
        return redirect('admin/videos')->with('message','Videos update successfully');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
       }

       public function destory($id){
        try {
        $video = Videos::findOrFail($id);
        $video->delete();

        return  redirect()->back()->with('message', 'Videos deleted');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    }

