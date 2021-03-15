<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    // protected $table = "services";

    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','opening_hour','closing_hour','phone'
       ];

       public static function getRetailPartner()
       {
           $records = DB::table('services')->select('id','latitude', 'longitude', 'name','email','address','opening_hour','closing_hour','phone')->get()->toArray();
           return $records;
       }
}
