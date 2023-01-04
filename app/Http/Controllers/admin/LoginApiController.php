<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginApiRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
class LoginApiController extends AppBaseController
{
    public function  login(LoginApiRequest $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('auth_token')->plainTextToken;
//            $success['token2'] =  $user->createToken('Performance Management System')->accessToken;
            $success['id'] =  $user->id;
            $success['name'] =  $user->name;
            $success['email'] =  $user->email;

            return $this->sendResponse($success, 'User login successfully.');
        }
        elseif(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return $this->sendError('Credientals does not match.');
        }else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

    }
}
