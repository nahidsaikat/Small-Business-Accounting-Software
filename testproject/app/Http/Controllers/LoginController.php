<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Login;


class LoginController extends Controller
{
	public function login()
	{
	 return view('login/login');
	}

  public function authenticated(Request $request)
  {

    $user = Login::where('name', '=', $request->name)->where('password', '=', $request->password)->first();
    if($user && $user->name = $request->name && $user->password = $request->password)
    {
      if($user->account_type == 1)
      {
        return redirect()->intended('/layout');
      }
      elseif($user->account_type == 2)
      {
        return redirect()->intended('/personal');
      }
      else
      {
        return redirect()->intended('/both');
      }
    }
    
    else 
    {
      return redirect('/login');
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/login');

  }
}


    // if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')]))
    // {
    //   if($request->account_type == 1)
    //   {
    //     return redirect()->intended('/layout');
    //   }
    //   elseif($request->account_type == 2)
    //   {
    //     return redirect()->intended('/personal');
    //   }
    //   else
    //   {
    //     return redirect()->intended('/both');
    //   }
    // }