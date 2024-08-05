<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = ['first_name','last_name', 'email','mobile','password'];
    protected $hidden = ['password', 'remember_token'];
}
