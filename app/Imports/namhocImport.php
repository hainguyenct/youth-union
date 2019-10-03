<?php

namespace App\Imports;

use App\Models\namhoc;
use Maatwebsite\Excel\Concerns\ToModel;

class namhocImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new namhoc([
            'id'     => $row[0],
            'namhoc'    => $row[1], 
            // 'password' => \Hash::make('123456'),
        ]);
    }
}
