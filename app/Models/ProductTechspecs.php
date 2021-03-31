<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTechspecs extends Model
{
    use HasFactory;

    public $table = "product_techspecs";

    public $fillable = ['spec', 'value'];

    // public function subcategory()
    // {
    //     return $this->hasMany('App\User\Models\Category','category_id');
    // }
}
