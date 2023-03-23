<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "booking";

    protected $fillable = [
        'name',
       'date',
       'table',
       'arrivaltime',
       'departuretime',
       'contact',
       'email',
       'status'


    ];
}
