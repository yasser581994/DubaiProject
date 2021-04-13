<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.index');
    }
    public function submitLogin(Request $request)
    {
        if(!Auth()->attempt($request->only('email','password'),true))
        {
            session()->flash('fail','your credentials are invalid ');
            return redirect()->back();
        }
        if(Auth()->user()->rule!=='admin')
        {
            Auth()->logout();
            session()->flash('fail','You are not allowed To Enter C-Panel');
            return redirect()->back();
        }
        return redirect()->route('message.index');
    }

    public function logout()
    {
        Auth()->logout();
        return redirect()->route('login.admin');
    }


}
