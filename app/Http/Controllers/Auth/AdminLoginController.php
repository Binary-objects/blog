<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Class AdminLoginController
 *
 * @package App\Http\Controllers\Auth
 */
class AdminLoginController extends Controller
{
    //
    /**
     * AdminLoginController constructor.
     */
    public function __construct()
    {
         $this->middleware('guest:admin');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    /**
     * @return bool
     * @throws \Illuminate\Validation\ValidationException
     */
    public function Login(Request $request)
    {
        //validate the request data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:3'

        ]);

        //attempt login

        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));



    }
}
