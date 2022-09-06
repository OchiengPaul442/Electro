<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    function loginUser(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:5|max:12'
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('userID', $user->id);
                return redirect('/')->with('success', 'Login Successful');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return Redirect('/')->with('error', 'The provided credentials do not match our records.');
        }
    }

    function registerUser(Request $request)
    {
        // Validate request
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|string|unique:users',
            'password' => 'required|alpha_num|min:5|max:12'
        ]);
        $user = new User();
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = Hash::make($request->password);
        $result = $user->save();
        if ($result) {
            return Redirect('/')->with('success', 'You have been successfully registered');
        } else {
            return Redirect('/')->with('fail', 'Something went wrong, please try again later');
        }
    }

    // 
    function myAccount(){
        $title = 'My profile';
        $data = array();
        if(Session::has('userID')){
            $data = User::where('id', Session::get('userID'))->first();//->toArray();
        }
        return view('pages.profile',compact('data','title'));
    }

    function logout(){
        if(Session::has('userID')){
            Session::pull('userID');//remove session
            return Redirect('/')->with('success', 'You have been successfully logged out');
        }
    }
}
