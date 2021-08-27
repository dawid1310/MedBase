<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function medicationPrescription(): HasMany
    {
        return $this->hasMany(MedicationPrescription::class);
    }
}
