<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Registration;
use Validator, Input, Redirect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;


class RegistrationController extends Controller
{

   	public function register()
	{
		return view('login/registrationform');
	}

	public function insert(LoginRequest $request)
	{ 
			$registrationobj = new Registration;
	        $registrationobj->name = $request->name;
	        $registrationobj->email =$request->email; 
	        //$registrationobj->password = Hash::make($request->password);
	        $registrationobj->password = $request->password;
	        $registrationobj->account_type = $request->account_type;
	        $registrationobj->save();
	       	return view('login/login')->with('status', 'Successfully Registered');	
	}
}
