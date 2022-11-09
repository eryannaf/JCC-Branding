<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Grades;
use Termwind\Components\Dd;
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
        $siswa = User::where('name', $row['nama_siswa'])->first();

        $guru = auth()->user()->id;
        // dd($guru);
        return new Grades([
            'user_id'  => $siswa->id,
            'nilai' => $row['nilai'],
            'study_id'    => $guru,
        ]);
    }
}
