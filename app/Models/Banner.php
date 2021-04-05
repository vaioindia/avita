<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';


    protected $fillable = ['title','web_image','mob_image','date','seq','status','url'];
}
