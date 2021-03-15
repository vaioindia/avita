<?php

namespace App\Exports;

use App\Models\RetailPartner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RetailPartnerExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
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
        // return RetailPartner::all();
        return collect(RetailPartner::getRetailPartner());
    }
}
