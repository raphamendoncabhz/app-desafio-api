<?php

namespace App\Services\Auth;

use Exception;
use Tymon\JWTAuth\JWTAuth;

class LoginService {

    public function execute(array $credentials){

        if(!$token = auth()->setTTL(6*60)->attempt($credentials))
            throw new Exception( 'Not Autorized', 401);


        return [
            'access_token' => $token,
            'token_type'=> 'Bearer',
            'expires_in' => auth()->factory()->getTTL(),
            'user' => auth()->user(),
        ];
    }
}
