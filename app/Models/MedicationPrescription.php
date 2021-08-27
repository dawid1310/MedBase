<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationPrescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'prescription_id',
        'medication_id'
    ];

    public function medication(): BelongsTo
    {
        return $this->belongsTo(Medication::class);
    }

    public function prescryption(): BelongsTo
    {
        return $this->belongsTo(prescription::class);
    }
}
