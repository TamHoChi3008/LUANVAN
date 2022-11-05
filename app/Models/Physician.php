<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'physician_name','physician_numb','physician_address','physician_gender','physician_dob','physician_email','physician_department_id','physician_user_id'
    ];
    protected $primaryKey = 'physician_id';
    protected $table = 'physician';
    public function department(){
        return $this->belongsTo('App\Models\Department','physician_department_id','department_id');
    }
}
