<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthService extends BaseService
{
    public function login($request){
        //if valid username and password given create and return login token
        $credentials = $request->only('email', 'password');
        if ($this->guard()->attempt($credentials)) {
            $request->session()->regenerate();
            return true;
        }
        //if invalid username or password given create error and return false
        $this->addError("auth", "Invalid email or password");
        return false;
    }

    public function logout()
    {
        Auth::logout();
        return true;
    }

    /**
     * Return auth guard
     */
    private function guard()
    {
        return Auth::guard();
    }
}