<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection4 extends Model
{
    use HasFactory;
    protected $table = "homes_section4";
    protected $fillable = [
        'title',
        'section',
        'section_4_image',
    ];
}
