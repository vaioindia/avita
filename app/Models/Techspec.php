<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techspec extends Model
{
    protected $fillable=['product_id','firstname', 'lastname',];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
