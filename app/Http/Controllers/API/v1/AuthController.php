<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class AuthController extends Controller
{

    public function login(Request  $request){

        //     $credentials = $request->only('email', 'password');
        //     $auth = $this->loginService->execute($credentials);
        //     dd($auth);
        //     return response()->json(['status' => true],  200);

        // } catch (\Exception $ex) {

        //     return response()->json(['error' => true, 'message' => $ex->getMessage()], $ex->getCode());
        //     //throw $th;
        // }
        $credentials = $request->only(['email', 'password']);


        if (! $token = Auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me(Request  $request){

        try {
            return response()->json(auth()->user());

        } catch (\Exception $ex) {

            return response()->json(['error' => true, 'message' => $ex->getMessage()], $ex->getCode());
            //throw $th;
        }

    }

    public function logout(Request  $request){

        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);


    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
