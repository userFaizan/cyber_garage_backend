<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionsSectionList extends Model
{
    use HasFactory;
    protected $table = "subscriptions_sectionlist";
    protected $fillable = [
        'list_title',
    ];
}

