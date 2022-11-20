<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSection2 extends Model
{
    use HasFactory;
    protected $table = "videos_section2";
    protected $fillable = [
        'title_1',
        'file_1',
    ];
}
