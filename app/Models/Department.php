<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'department_name', 'department_parent','department_desc','department_status',
    ];
    protected $primaryKey = 'department_id';
    protected $table = 'department';

    public function physician()
    {
        return $this->hasMany('App\Models\Physician');
    }
}
