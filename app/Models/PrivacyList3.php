<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyList3 extends Model
{
    use HasFactory;
    protected $table = 'privacy_list3';
    protected $fillable = [
        'list_title',
    ];
}
