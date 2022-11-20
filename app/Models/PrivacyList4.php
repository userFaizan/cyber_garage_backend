<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyList4 extends Model
{
    use HasFactory;
    protected $table = 'privacy_list4';
    protected $fillable = [
        'list_title',
    ];
}
