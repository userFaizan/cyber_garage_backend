<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSubscription extends Model
{
    use HasFactory;
    protected $table = "subscriptions_section";
    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'title_4',
    ];
}
