<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user');
    }



    public function showLoginForm()
    {
        return view('user.user-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('user.index'));
        }
        //fails
        return redirect()->back()->withInput($request->only('email','remember'));
       
    }

}
