<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Student1 extends Model
{
    use HasFactory,  HasApiTokens;
    protected $fillable = ['cne', 'firstName', 'lastName','age','speciality'];
}