<?php

namespace App\Exports;

use App\Models\ExclusiveBrand;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ExclusiveBrandExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'S.NO','Latitude', 'Longitude', 'Name','Email','Phone','Address','Opening hour','Closing hour'
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
