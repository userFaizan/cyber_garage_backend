<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementSection2 extends Model
{
    use HasFactory;
    protected $table = "managements_section2";
    protected $fillable = [
        'title',
        'para',
        'file_image_2',
    ];
}
