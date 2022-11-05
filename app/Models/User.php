<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'user_name','user_password','user_email','user_role'
    ];
    protected $primaryKey = 'user_id';
    protected $table = 'user';
}
