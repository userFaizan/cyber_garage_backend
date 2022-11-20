<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection8List extends Model
{
    use HasFactory;

    protected $table = "section8_lists";

    protected $fillable = [

        'list_item',
    ];

}
