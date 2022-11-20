<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementSection3 extends Model
{
    use HasFactory;
    protected $table = "managements_section3";
    protected $fillable = [
        'title_1',
        'para_1',
        'title_2',
        'para_2',
        'file_image_2',
    ];
}
