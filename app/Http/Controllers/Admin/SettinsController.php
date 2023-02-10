<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class SettinsController extends Controller
{
    public function index(){

        return view('admin.setting.index');

    }


    
    public function save_settings(Request $request){

        $validator = Validator::make($request->all(),[
            'website_name'=> 'required|max:255',
            'logo'=> 'required',
            'favicon'=> 'nullable',
            'description'=> 'nullable',
            'meta_title'=> 'required|max:255',
            'meta_description'=> 'nullable',
            'meta_keyword'=> 'nullable'

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        $setting = Settings::where('id','1')->first();
        if($setting)
        {

            $setting = new Settings;
            $setting->website_name = $request->website_name;
            $setting->logo = $request->logo;

            if($request->hasfile('logo'))
            {

                $destination = public_path('Image/setting/'.$setting->logo);
                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image/setting'), $filename);
                $setting->logo = $filename;
            }


            if($request->hasfile('favicon'))
            {

                $destination = public_path('Image/setting/'.$setting->favicon);
                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $file= $request->file('favicon');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image/setting'), $filename);
                $setting->favicon = $filename;
            }

            $setting->description = $request->description;
            $setting->meta_title = $request->meta_title;
            $setting->meta_description = $request->meta_description;
            $setting->meta_keyword = $request->meta_keyword;

            $setting->save();

            return redirect('admin/settings')->with('message','Setting  Updated');

        }
        else
        {
            $setting = new Settings;
            $setting->website_name = $request->website_name;
            $setting->logo = $request->logo;

            if($request->hasfile('logo'))
            {
                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image/setting'), $filename);
                $setting->logo = $filename;
            }
            if($request->hasfile('favicon'))
            {
                $file= $request->file('favicon');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image/setting'), $filename);
                $setting->favicon = $filename;
            }

            $setting->description = $request->description;
            $setting->meta_title = $request->meta_title;
            $setting->meta_description = $request->meta_description;
            $setting->meta_keyword = $request->meta_keyword;

            $setting->save();

            return redirect('admin/settings')->with('message','Setting  added');



        }


    }
}
