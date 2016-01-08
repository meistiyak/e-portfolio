<?php 

namespace App\Repositories;
use App\User;

class UserRepository {
    
    public function findByUserNameOrCreate($userData) {
        $user = User::where('provider_id', '=', $userData->id)->first();
       // echo '<pre>';
       // echo $userData->nickname;
       // print_r($userData);
      //  die();
        if(!$user) {
            $user = User::create([
                'provider_id' => $userData->id,
                'name' => (isset($userData->name))?$userData->name:$userData->nickname,
                'email' => $userData->email,
                'avatar' => $userData->avatar,
                //'active' => 1,
                'verified' => true,
            ]);
        }

        $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;
    }

    public function checkIfUserNeedsUpdating($userData, $user) {

        $socialData = [
            'avatar' => $userData->avatar,
            'email' => $userData->email,
            'name' => (isset($userData->name))?$userData->name:$userData->nickname,
        ];

        $dbData = [
            'avatar' => $user->avatar,
            'email' => $user->email,
            'name' => $user->name,
        ];

        if (!empty(array_diff($socialData, $dbData))) {
            $user->avatar = $userData->avatar;
            $user->email = $userData->email;
            $user->name = (isset($userData->name))?$userData->name:$userData->nickname;
            $user->save();
        }
    }
}