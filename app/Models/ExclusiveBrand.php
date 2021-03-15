<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ExclusiveBrand extends Model
{   
    // protected $table = "exclusive_brands";
    
    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','opening_hour','closing_hour','phone'
       ];

       public static function getRetailPartner()
       {
           $records = DB::table('exclusive_brands')->select('id','latitude', 'longitude', 'name','email','address','opening_hour','closing_hour','phone')->get()->toArray();
           return $records;
       }
}
