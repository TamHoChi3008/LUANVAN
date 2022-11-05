<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'patient_name','patient_numb','patient_address','patient_gender','patient_dob','patient_diagnoses','patient_status','patient_notes','patient_user_id',
    ];
    protected $primaryKey = 'patient_id';
    protected $table = 'patient';
}
