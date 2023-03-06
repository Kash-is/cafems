<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staff";
    protected $fillable = [
        'name',
        'address',
        'contact',
        'image',
        'email',
        'gender',
        'dob'


    ];

    protected $date = [
        'dob'
    ]; //defining dob property

}
