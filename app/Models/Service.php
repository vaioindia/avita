<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    // protected $table = "services";

    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','phone','opening_hour','closing_hour'
       ];

       public static function getRetailPartner()
       {
           $records = DB::table('services')->select('latitude', 'longitude', 'name','email','address','phone','opening_hour','closing_hour')->get()->toArray();
           return $records;
       }
}
