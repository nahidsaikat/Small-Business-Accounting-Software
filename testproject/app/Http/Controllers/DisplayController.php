<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DisplayController extends Controller
{
   public function display()
   {
   	return view('layout.extendslayout');
   }

   public function display1()
   {
   	return view('dashboard.personal');
   }

   public function display2()
   {
   	return view('dashboard.both');
   }
}
