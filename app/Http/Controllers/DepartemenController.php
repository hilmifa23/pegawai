<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartemenController extends Controller
{
    public function index(){

        $departemen = Departemen::all();
        return view('departemen.tabel-departemen', compact('departemen'));
    }

    public function create(){
        return view('departemen.tambah-departemen');
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make ($request->all(),[
            'nama_departemen'   => 'required',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $departemen['nama_departemen']  = $request->nama_departemen;

        Departemen::create($departemen);

        return redirect()->route('departemen.index');
    }

    public function edit(Request $request, $id){

        $departemen = Departemen::find($id);

        return view('departemen.edit-departemen', compact('departemen'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make ($request->all(),[
            'nama_departemen'   => 'required',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $departemen['nama_departemen']  = $request->nama_departemen;

        Departemen::whereId($id)->update($departemen);

        return redirect()->route('departemen.index');

    }

    public function delete(Request $request, $id){
        $departemen = Departemen::find($id);

        if($departemen){
            $departemen->delete();
        }

        return redirect()->route('departemen.index');
    }

}
