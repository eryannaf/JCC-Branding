<?php

namespace App\Imports;

use App\Models\Grades;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaiImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $guru = auth()->user()->id;
        return new Grades([
            'user_id'  => $row['nama siswa'],
            'nilai' => $row['nilai'],
            'user_id'    => $guru,
        ]);
    }
}
