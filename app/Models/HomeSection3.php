<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection3 extends Model
{
    use HasFactory;
    protected $table = "homes_section3";
    protected $fillable = [
        'title',
        'section',
        'section_3_image',
    ];
}
