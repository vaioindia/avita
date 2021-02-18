<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
     'reference', 'timeline', 'start_time','end_time'
    ];
}
