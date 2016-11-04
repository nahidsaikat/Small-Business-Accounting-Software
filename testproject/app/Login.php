<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
   protected $table = 'users';
   protected $fillable = ['name','password','account_type'];
}
