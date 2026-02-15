<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkillCategory extends Model
{
    protected $fillable = ['name', 'sort_order'];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class)->orderBy('sort_order');
    }
}
