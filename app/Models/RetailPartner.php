<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class RetailPartner extends Model
{
    // protected $table = "retail_partners";

    protected $fillable = [
        'latitude', 'longitude', 'name','email','address','phone','opening_hour','closing_hour'
       ];

    public static function getRetailPartner()
    {
        $records = DB::table('retail_partners')->select('latitude', 'longitude', 'name','email','address','phone','opening_hour','closing_hour')->get()->toArray();
        return $records;
    }
}
