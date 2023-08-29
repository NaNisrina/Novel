<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Login as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Login extends Model{
    use HasFactory;
}
