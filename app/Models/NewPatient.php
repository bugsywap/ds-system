<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class NewPatient extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'new_patient';


    protected $fillable = [
        'patient_id', 'patient_name', 'age', 'phone', 'doctor', 'service'
    ];
}
