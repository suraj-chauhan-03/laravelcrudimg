<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $able="employees";
    protected $fillable = [
        "eid","name","email","gender","city","hobby","dob","image"
    ];

}
