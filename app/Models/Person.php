<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    //mindeképp $fillable-nek kell lennie
    protected $fillable = ['name', 'email','age','phone'];
}
