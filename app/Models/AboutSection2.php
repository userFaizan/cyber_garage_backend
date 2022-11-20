<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection2 extends Model
{
    use HasFactory;
    protected $table = "aboutus_section2";
    protected $fillable = [
        'title_1',
        'para_1',
        'title_2',
        'para_2',
        'title_3',
        'para_3',
        'file_image',
    ];
}
