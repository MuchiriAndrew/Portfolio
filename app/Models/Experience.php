<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company',
        'title',
        'role_tag',
        'date_range',
        'tech_stack',
        'description',
        'sort_order',
    ];
}
