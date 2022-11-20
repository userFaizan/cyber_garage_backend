<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementSection1 extends Model
{
    use HasFactory;
    protected $table = "managements_section1";
    protected $fillable = [
        'title',
        'sub_title',
    ];
}
