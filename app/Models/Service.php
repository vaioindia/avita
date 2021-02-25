<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','opening_hour','phone'
       ];
}