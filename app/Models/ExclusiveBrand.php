<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ExclusiveBrand extends Model
{
    // protected $table = "exclusive_brands";category

    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','phone','opening_hour','closing_hour'
       ];

       public static function getRetailPartner()
       {
           $records = DB::table('exclusive_brands')->select('latitude', 'longitude', 'name','email','address','phone','opening_hour','closing_hour')->get()->toArray();
           return $records;
       }
}
