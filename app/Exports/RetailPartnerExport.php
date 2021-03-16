<?php

namespace App\Exports;

use App\Models\RetailPartner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RetailPartnerExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'Latitude', 'Longitude', 'Name','Email','Address','Phone','Opening hour','Closing hour'
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
