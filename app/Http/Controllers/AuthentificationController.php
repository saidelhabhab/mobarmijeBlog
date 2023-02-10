<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthentificationController extends Controller
{

    // authentification by github
    public function githubredirect(Request $request){

        return Socialite::driver('github')->redirect();
    }

    public function githubcallback(Request $request){

        $userdata = Socialite::driver('github')->user();

        $user = User::where('email',$userdata->email)->where('auth_type','github')->first();

        if($user)
        {
            //do login

            Auth::login($user);
            return redirect('/');
        }
        else
        {
            //do register

            $uuid= Str::uuid()->toString(); // add uuid()

            $user = new User();
            $user->name = $userdata->name;
            $user->email = $userdata->email;
            $user->password = Hash::make($uuid.now());
            $user->auth_type ='github';
            $user->save();
            Auth::login($user);

            return redirect('/');
        }

    }

    /////////////////////////////////////////////////////////////

      // authentification by google
    public function googleredirect(Request $request){

        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request){

        $userdata = Socialite::driver('google')->user();

        dd($userdata);

        $user = User::where('email',$userdata->email)->where('auth_type','google')->first();

        if($user)
        {
            //do login

            Auth::login($user);
            return redirect('/');
        }
        else
        {
            //do register

            $uuid= Str::uuid()->toString(); // add uuid()

            $user = new User();
            $user->name = $userdata->name;
            $user->email = $userdata->email;
            $user->password = Hash::make($uuid.now());
            $user->auth_type ='google';
            $user->save();
            Auth::login($user);

            return redirect('/');
        }



    }
}



