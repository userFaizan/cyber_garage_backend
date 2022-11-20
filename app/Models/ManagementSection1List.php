<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementSection1List extends Model
{
    use HasFactory;
    protected $table = "managements_sectionlist";
    protected $fillable = [
        'list_title',
    ];
}
