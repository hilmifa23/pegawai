<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $totaldepartemen = Departemen::count();
        $totalpegawai = Pegawai::count();

        return view('dashboard', compact('totaldepartemen', 'totalpegawai'));
    }
}
