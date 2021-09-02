<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SickLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'end',
        'visit_id',
        'code'
    ];

    public function visit(): BelongsTo
    {
        return $this->belongsTo(Visit::class);
    }

}
