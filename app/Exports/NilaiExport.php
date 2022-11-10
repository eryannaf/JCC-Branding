<?php

namespace App\Exports;

use App\Models\Grades;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NilaiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::table('users')
            ->join('grades', 'users.id', '=', 'grades.user_id')
            ->join('teachers', 'grades.study_id', '=', 'teachers.user_id')
            ->select('users.name', 'teachers.keahlian', 'grades.nilai',)
            ->get();
        return $data;
    }

    public function headings(): array
    {
        return ["name", "pelajaran", "nilai"];
    }
}
