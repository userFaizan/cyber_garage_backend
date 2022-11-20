<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection2List extends Model
{
    use HasFactory;
    protected $table = "section2_lists";

    protected $fillable = [

        'list_item',
    ];

}
