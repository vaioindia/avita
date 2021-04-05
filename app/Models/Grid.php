<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    use HasFactory;

    protected $table = "grids";

    protected $fillable = [
        'title','type','longitude', 'image','url'
       ];
}
