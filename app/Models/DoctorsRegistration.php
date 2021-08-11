<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'pwz_number', 'pesel', 'email'];
}
