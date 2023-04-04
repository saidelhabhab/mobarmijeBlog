<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use App\Models\Settings;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class FrontendController extends Controller
{

    public function zone(){
        $all_Post = Post::where('status','0')->orderBy('created_at','DESC')->take(15)->get();
        $all_Catogory = Category::where('status','0')->get();
      //  dd( $all_Post);
        return view('frontend.zone',compact('all_Post','all_Catogory'));
    }

    public function index(){

        $setting = Settings::find(1);
        $all_Post = Post::where('status','0')->orderBy('created_at','DESC')->take(15)->get();
        $all_Catogory = Category::where('status','0')->get();
      //  dd( $all_Post);
        return view('frontend.index',compact('all_Post','all_Catogory','setting'));


    }

    public function viewCategoryPost(String $category_slug){

        $category = Category::where('slug',$category_slug)->where('status','0')->first();

        if($category )
        {
            $post = Post::where('category_id',$category->id)->where('status','0')->paginate(5);
            //dd( $post);
            return view('frontend.post.index',compact('post','category'));
        }
        else
        {
            redirect('/');
        }

    }
    public function viewPost(String $category_slug, string $post_slug ){

        $category = Category::where('slug',$category_slug)->where('status','0')->first();

        if($category )
        {
            $post = Post::where('category_id',$category->id)->where('slug',$post_slug )->where('status','0')->first();
            //dd( $post);
            $latest_post = Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->take(15)->get();
            return view('frontend.post.view',compact('post','latest_post'));
        }
        else
        {
            redirect('/');
        }

    }


    public function contact(){

        return view('frontend.contact');

    }

    public function contact_send(ContactRequest $request){


          $datalis=[
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        //dd($datalis);
        Mail::to('saidelhabhab@gmail.com')->send(new ContactMail($datalis));
        return back()->with('message_sent','Your Message has been sent successfully!');

    }
}
