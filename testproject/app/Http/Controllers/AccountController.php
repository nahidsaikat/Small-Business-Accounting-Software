<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Account\CreateRequest;
use App\Model;
class AccountController extends Controller
{
    public function index() {
        $data=Model\Account::all();
    	return view('account.accountlist')->with('data',$data);
    }

    public function store(CreateRequest $request){
    	$account = new \App\Model\Account;
    	$account->acc_name = $request->acc_name;
    	$account->acc_code = $request->acc_code;
    	$account->balance = $request->balance;
    	$account->type = $request->type;
    	$account->description = $request->description;
    	$account->date = $request->date;
    	$account->save();
    	return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        # code...
    }

}//nahidsaikatft40@gmail.com
