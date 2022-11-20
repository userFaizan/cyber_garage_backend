<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection5List extends Model
{
    use HasFactory;
    protected $table = "section5_lists";

    protected $fillable = [

        'list_item',
    ];

}
