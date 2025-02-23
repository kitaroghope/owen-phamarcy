<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'dosage', 'price', 'stock', 'manufacturer',
    ];

    // You can add relationships here if needed
}