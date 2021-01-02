<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyController extends Controller 
{
    public function verify($code)
    {
        $user = User::where('verification_code', $code)->first();
        if ($user) {
            $user->verified = true;
            $user->verification_code = null;
            $user->save();
            return redirect()->route('auth.login')->with('message', 'You have successfully confirmed your email! You can now login.');
        } else {
            //TODO manage non-verified users
            return redirect()->route('auth.login')->with('message', 'You have successfully confirmed your email! You can now login.');
        }
    }
}