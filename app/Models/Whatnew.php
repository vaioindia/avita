<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatnew extends Model
{
    protected $table = 'whatnews';


    protected $fillable = ['title','published_at','published','image','url'];
}
