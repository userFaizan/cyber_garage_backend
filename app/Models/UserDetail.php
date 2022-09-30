<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = "userdetail";
    protected $fillable = [
        'c_name','c_address', 'city','state','code','c_phone','c_email','number','f_name','l_name'
        ,'phone' ,'email' ,'username','password'  ];
}
