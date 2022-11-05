<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'time_pick'
    ];
    protected $primaryKey = 'time_id';
    protected $table = 'time';

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment');
    }
}
