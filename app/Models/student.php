<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table ='students';
    protected $fillable =['cne','fistName','SecondName', 'age','speciality'];
}
