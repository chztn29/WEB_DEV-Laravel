<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Students;


class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $student = Students::where('email', $request->email)->first();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('students.index');
        }
        
        return back()->with('error', 'Invalid email or password.');
    
    }

}