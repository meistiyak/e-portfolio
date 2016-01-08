<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;

//use ValidatesRequests;
use Socialite;
use Auth;
use redirect;

class SocialAuthController extends Controller
{   
    // For Facebook
    public function redirectToProvider(){
        
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(User $user)
    {
        $money = Socialite::driver('facebook')->user();

        if(User::where('email', '=', $money->email)->first()){
            $checkUser = User::where('email', '=', $money->email)->first();
            Auth::login($checkUser);
            return redirect('/pages/profile');
        } 

        $user->facebook_id = $money->getId();
        $user->name = $money->getName();
        $user->email = $money->getEmail();
        $user->avatar = $money->getAvatar();
        $user->save();

        Auth::login($user);
        return redirect('/pages/profile');
     
    }



    // For Github
    public function github_redirect(){
        
        return Socialite::driver('github')->redirect();
    }

    public function github_Callback(User $user)
    {
        $money = Socialite::driver('github')->user();

        if(User::where('email', '=', $money->email)->first()){
            $checkUser = User::where('email', '=', $money->email)->first();
            Auth::login($checkUser);
            return redirect('/pages/profile');
        } 

        $user->github_id = $money->getId();
        $user->name = $money->getName();
        $user->email = $money->getEmail();
        $user->avatar = $money->getAvatar();
        $user->save();

        Auth::login($user);
        return redirect('/pages/profile');
     
    }


    // For Google-Plus
    public function google_plus_redirect(){
        
        return Socialite::driver('google')->redirect();
    }

    public function google_plsu_Callback(){

        $money = Socialite::driver('google')->user();

        if(User::where('email', '=', $money->email)->first()){
            $checkUser = User::where('email', '=', $money->email)->first();
            Auth::login($checkUser);
            return redirect('/pages/profile');
        } 

       // $user->github_id = $money->getId();
        $user->name = $money->getName();
        $user->email = $money->getEmail();
        $user->avatar = $money->getAvatar();
        $user->save();

        Auth::login($user);
        return redirect('/pages/profile');
    }

    // For Linkedin
    public function linkedin_redirect(){
        
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedin_Callback(){

        $curl = curl_init();
        curl_setopt($curl , CURLOPT_SSL_VERIFYPEER, false);

        $user = Socialite::driver('linkedin')->user();
        $data = ['name'=>$user->name, 'email'=>$user->email, 'password'=>$user->token];
        $userDB = User::where('email',$user->email)->first();

        if (!is_null($userDB)){
            Auth::login($userDB);
        }
        else{
            Auth::login($this->create($data));
        }
        return redirect('/pages/profile');
    }
}


/*        $data = new User();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = $request->get('password');*/

/*        $user_data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'token' => $confirmation_code
        ];*/