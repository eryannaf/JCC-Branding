<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homeSiswa()
    {
        return view('app.app');
    }
    public function homeAdmin()
    {
        return view('app.app');
    }
    public function homeGuru()
    {
        return view('admin.dashboard');
    }
}
