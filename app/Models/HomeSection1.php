<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection1 extends Model
{
    use HasFactory;
    protected $table = "homes_section1";
    protected $fillable = [
        'title_1',
        'section_1',
        'title_2',
        'section_2',
        'title_3',
        'video_link',
    ];
}
