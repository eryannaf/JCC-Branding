<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grades;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.nilai.index');
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
        $rules = [
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',

        ];

        $message = [
            'email.required'       => 'Mohon isikan  email guru',
            'password.required'    => 'Mohon isikan password',
            'nip.required'         => 'Mohon isikan NIP',
            'keahlian.required'    => 'Mohon isikan keahlian',
            'alamat.required'      => 'Mohon isikan alamat',
            'no_telp.required'     => 'Mohon isikan Nomor Telepon',

        ];

        $validator = Validator::make($request->all(), $rules, $message);



        if ($validator->fails()) {
            return 'kumaha aing';
        }

        User::create($request->only(['name', 'email', 'password']))->teacher()->create([
            'nip' => $request->nip,
            'keahlian' => $request->keahlian,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect('/teacher');
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
