<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TwoFactorController extends Controller
{
    public function index(){
        $user = Auth::user();
        $code = rand(100000, 999999);
        $user->two_factor_code = $code;
        $user->save();

        Mail::raw("Your two-factor authentication code is: $code", function ($message) use ($user) {
            $message->to($user->email)->subject('Two-Factor Authentication Code');
            
        });
    }
}
