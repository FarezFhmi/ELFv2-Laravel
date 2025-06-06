<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

class AuthController extends Controller
{
    public function loginView(){
        if (Auth::check()){
            return back();
        }
        return view('pages.auth.login.login');
    }

    public function login(Request $request){
        if (Auth::check()){
            return back();
        }
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Use the relationship to check the role
            if ($user->roles->name == 'Admin') {  // Use the 'roles' relationship
                return redirect()->intended('/foundItem');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registerView(){
        if (Auth::check()){
            return back();
        }
        return view('pages.auth.register.register');
    }

    public function register(Request $request){
        if (Auth::check()){
            return back();
        } 
        $validatedData = $request->validate([
            "name" => "required|string|unique:users,name",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|confirmed|min:8",
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'password_confirmation.required' => 'Password confirmation must match',
        ]);

        $validatedData['roles_id'] = 2; // User role
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }



    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
