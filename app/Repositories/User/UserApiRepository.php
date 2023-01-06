<?php

namespace App\Repositories\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make($request->password),
        );
        $userStore = User::create($storeUserArray);
        return $userStore;
    }
}
