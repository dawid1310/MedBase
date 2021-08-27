<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'danger',
        'description',
        'specialization_id'
    ];
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }

}
