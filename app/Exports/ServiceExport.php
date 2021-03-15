<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceExport implements FromCollection,WithHeadings
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
        return Service::all();
        return collect(Service::getService());
    }
}
