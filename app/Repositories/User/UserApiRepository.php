<?php

namespace App\Repositories\User;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
class UserApiRepository
{
    public function __construct()
    {
        //
    }
    public function model()
    {
        return User::class;
    }
    public function createUser($request){
        $storeUserArray = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => crypt::encryptString($request->password),
        );
        $userStore = User::create($storeUserArray);
        return $userStore;
    }
}
