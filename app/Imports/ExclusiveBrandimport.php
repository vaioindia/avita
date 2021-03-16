<?php

namespace App\Imports;

use App\Models\ExclusiveBrand;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExclusiveBrandimport implements ToModel,WithHeadingRow
{
    /**'S.NO','Latitude', 'Longitude', 'Name','Email','Phone','Address','Opening hour','Closing hour'
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExclusiveBrand([
            'latitude' => $row['latitude'],
            'longitude' => $row['longitude'],
            'name' => $row['name'],
            'email' => $row['email'],
            'phone' => $row['phone'],
            'address' => $row['address'],
            'opening_hour' => $row['opening_hour'],
            'closing_hour' => $row['closing_hour'],
        ]);
    }
}
