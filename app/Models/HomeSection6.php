<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection6 extends Model
{
    use HasFactory;
    protected $table = "homes_section6";
    protected $fillable = [
        'title',
        'section',
        'section_6_image',
    ];
}
