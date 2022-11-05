<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'appointment_name', 'appointment_physician_id','appointment_user_id','appointment_phone','appointment_email','appointment_notes','appointment_time','appointment_date',
    ];
    protected $primaryKey = 'appointment_id';
    protected $table = 'appointment';
}
