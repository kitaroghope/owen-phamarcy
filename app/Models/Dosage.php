<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosage extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'medication_name', 'dosage', 'schedule',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}