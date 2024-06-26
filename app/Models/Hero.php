<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'gender', 'image'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
    
    public function getImageUrlAttribute()
    {
        return asset('images/' . $this->image);
    }
}
