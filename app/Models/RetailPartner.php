<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class RetailPartner extends Model
{
    // protected $table = "retail_partners";

    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','opening_hour','closing_hour','phone'
       ];

    public static function getRetailPartner()
    {
        $records = DB::table('retail_partners')->select('latitude', 'longitude', 'name','email','address','opening_hour','closing_hour','phone')->get()->toArray();
        return $records;
    }
}
