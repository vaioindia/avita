<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceExport implements FromCollection,WithHeadings
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
        return Service::all();
        return collect(Service::getService());
    }
}
