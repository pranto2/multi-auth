<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function index() {
    	return view('admin.login');
    }

    public function login(Request $request)
    {
      $this->validate($request ,[
        'username' => 'required|unique:admins',
        'password' => 'required'
      ]);

      if (Auth::guard('admin')->attempt(['username' => $request->username,
        'password' => $request->password ], $request->remember )){
        return redirect()->route('admin.dashboard');
      }
        return redirect()->back()->withInput($request->only('username', 'remember'))->with('msg','User Email Or Password Did Not Matched');


    }

    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect('/admin');
    }

}
