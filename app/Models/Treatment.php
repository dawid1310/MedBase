<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'disease_id'
    ];

    public function disease(): BelongsTo
    {
        return $this->belongsTo(Disease::class);
    }

    public function visit(): HasMany
    {
        return $this->hasMany(Visit::class);
    }

    public function file(): HasMany
    {
        return $this->hasMany(File::class);
    }
}
