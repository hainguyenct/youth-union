<?php

namespace App\Exports;

use App\Models\namhoc;
use Maatwebsite\Excel\Concerns\FromCollection;

class namhocExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return namhoc::all();
    }
}
