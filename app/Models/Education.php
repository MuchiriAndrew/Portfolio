<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'institution',
        'degree',
        'date_range',
        'description',
        'sort_order',
    ];
}
