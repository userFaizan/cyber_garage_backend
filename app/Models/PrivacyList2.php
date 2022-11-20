<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyList2 extends Model
{
    use HasFactory;
    protected $table = 'privacy_list2';
    protected $fillable = [
        'list_title',
    ];
}
