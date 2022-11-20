<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyList1 extends Model
{
    use HasFactory;
    protected $table = 'privacy_list1';
    protected $fillable = [
        'list_title',
    ];
}
