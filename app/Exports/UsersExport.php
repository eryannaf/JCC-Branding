<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return ["Name", "Email", "Tanggal Lahir", "Jenis Kelamin", ""];
    }

    public function collection()
    {
        $user = DB::table('users')
            ->join('students', 'users.id', '=', 'students.user_id')
            ->select('users.name', 'users.email', 'students.tgl_lahir', 'jenis_kelamin')
            ->get();

        return $user;
    }
}
