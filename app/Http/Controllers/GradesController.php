<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grades;
use App\Models\Studies;
use Termwind\Components\Dd;
use App\Exports\NilaiExport;
use App\Imports\NilaiImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class GradesController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new NilaiImport, $request->file);
        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new NilaiExport, 'users.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
        ->where('users.id', auth()->user()->id)
            ->join('grades', 'users.id', '=', 'grades.user_id')
            ->join('teachers', 'grades.study_id', '=', 'teachers.user_id')
            ->select('users.name', 'teachers.keahlian', 'grades.nilai',)
            ->get();
        return view('admin.nilai.index', compact(('data')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $rules = [
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',

        ];

        $message = [
            'nilai.required'  => 'Mohon isikan  nilai',

        ];

        $validator = Validator::make($request->all(), $rules, $message);



        if ($validator->fails()) {
            return 'kumaha aing';
        }

        $id = auth()->user()->id;

        $mapel = Studies::where('user_id', $id)->first();

        Grades::create([
            'nilai' => $request->nilai,
            'user_id' => $request->user_id,
            'studies_id' => $mapel->id
        ]);

        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function show(Grades $grades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grades $grades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grades $grades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grades $grades)
    {
        //
    }
}
