<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSection1 extends Model
{
    use HasFactory;
    protected $table = "videos_section1";
    protected $fillable = [
        'title',
        'section_1',
        'section_2',
    ];
}
