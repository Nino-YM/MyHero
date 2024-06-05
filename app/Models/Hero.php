<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
