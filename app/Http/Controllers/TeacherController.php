<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guru.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
