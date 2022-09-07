<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Login user
    function loginUser(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:5'
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            // password hashing
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('userID', $user->id);
                // remember me
                if ($request->has('rememberMe')) {
                    Cookie::queue('userEmail', $request->email, 60 * 24 * 30);
                    Cookie::queue('userPassword', $request->password, 60 * 24 * 30);
                }
                return redirect('/')->with('success', 'Login Successful');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return Redirect('/')->with('error', 'The provided credentials do not match our records.');
        }
    }
    // register user
    function registerUser(Request $request)
    {
        // Validate request
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|string|unique:users,phonenumber',
            'password' => 'required|alpha_num|min:5'
        ]);
        $user = new User();
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = Hash::make($request->password);
        $result = $user->save();// save user
        if ($result) {
            return redirect('verify');
            // return Redirect('/')->with('success', 'You have been successfully registered');
        } else {
            return Redirect('/')->with('fail', 'Something went wrong, please try again later');
        }
    }

    // user profile page
    function myAccount()
    {
        $title = 'My profile';
        $data = array();
        if (Session::has('userID')) {
            $data = User::where('id', Session::get('userID'))->first(); //->toArray();
        }
        return view('pages.main.profile', compact('data', 'title'));
    }

    // logout user
    function logout()
    {
        if (Session::has('userID')) {
            Session::pull('userID'); //remove session
            return Redirect('/')->with('success', 'You have been successfully logged out');
        }
    }
}
