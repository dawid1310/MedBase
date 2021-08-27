<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    /**
     * Get all of the doctors for the Specialization
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    protected $fillable = [
        'specialization',
        'specification'
    ];

    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }

}
