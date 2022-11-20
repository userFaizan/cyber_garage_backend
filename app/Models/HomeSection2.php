<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection2 extends Model
{
    use HasFactory;
    protected $table = "homes_section2";
    protected $fillable = [
        'title',
        // 'section',
        'sub_title',
        // 'list_1',
        // 'list_2',
        // 'list_3',
        // 'list_4',
        // 'list_5',
        // 'list_6',
        // 'list_7',
        'section_2_image',
    ];
}
