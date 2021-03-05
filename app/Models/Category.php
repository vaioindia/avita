<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','type'];

    // public function user()
    // {
    //     return $this->hasMany('App\User\Models\Product');
    // }
}
