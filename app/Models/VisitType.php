<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];
    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
}
