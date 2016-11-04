<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\LoginRequest;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function login()
    {
     return view('login/login');
    }

    public function authenticated(Request $request)
    {
        // dd($request->name, $request->password,$request->account_type);
        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')])) 
        {
            $user = Login::where('name', '=', $request->name)->where('password', '=', $request->password)->first();
            if($user->account_type == 2)
            {
                return redirect()->intended('/personal');
            }
            else{
                return redirect()->intended('layout');
            }
        }
        else {

            return "sdvjk";
        }
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');

    }
}
