<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection1 extends Model
{
    use HasFactory;
    protected $table = "aboutus_section1";
    protected $fillable = [
        'title',
        'sub_title',
    ];
}
