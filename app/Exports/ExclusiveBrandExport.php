<?php

namespace App\Exports;

use App\Models\ExclusiveBrand;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExclusiveBrandExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'id',
            'latitude',
            'longitude',
            'name',
            'email',
            'address',
            'phone',
            'opening_hour',
            'closing_hour'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExclusiveBrand::all();
        return collect(ExclusiveBrand::getExclusiveBrand());
    }
}
