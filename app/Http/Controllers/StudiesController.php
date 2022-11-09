<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Models\Studies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pelajaran = Studies::all();
        $data = DB::table('users')
            ->join('teachers', 'users.id', '=', 'teachers.user_id')
            ->select('users.*', 'teachers.*')
            ->get();
        return view('admin.pelajaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelajaran.create');
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
            'mata_pelajaran' => 'required',
            'waktu'          => 'required',
            'hari'           => 'required',

        ];

        $message = [
            'mata_pelajaran.required' => 'Mohon isikan nama Mata Pelajaran',
            'waktu.required'          => 'Mohon isikan  waktu',
            'hari.required'           => 'Mohon isikan hari',

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

        return redirect('/study');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function show(Studies $studies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function edit(Studies $studies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studies $studies)
    {
        $user = Student::where('user_id', $studies->user_id)->update([
            'tanggal_lahir'     => $request->tanggal_lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,

        ])->user()->update([
            'name'              => $request->name,
            'email'              => $request->email,
            'password'          => $request->password,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studies $studies)
    {
        //
    }
}
