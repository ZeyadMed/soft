<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable =['name' , 'code', 'email','password','department_id' , 'semester'];


    public function department () {
        return $this -> hasOne (Department::class , 'id' , 'department_id');
    }
}
