<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
	protected $table = 'users';
    
	protected $fillable = ['name','email','password','account_type'];
}
