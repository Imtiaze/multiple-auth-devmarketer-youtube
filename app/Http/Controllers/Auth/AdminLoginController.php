<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin',  ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the use in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successfull, then redirect to their intended location 
            return redirect()->route('admin.dashboard');
        }

        // If unsuccessfull, then redirect to login with the form data
        return redirect()->back()->withInput($request->only('password', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }
}
