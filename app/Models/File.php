<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file',
        'description',
        'treatment_id'
    ];

    public function visits(): BelongsTo
    {
        return $this->belongsTo(Treatment::class);
    }
}
