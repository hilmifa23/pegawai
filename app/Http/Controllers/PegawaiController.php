<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    public function index(){

        $pegawai = Pegawai::with('departemen')->get();
        return view('pegawai.tabel-pegawai', compact('pegawai'));
    }

    public function create(){
        $departemen = Departemen::all();
        return view('pegawai.tambah-pegawai', compact('departemen'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nama_pegawai'  => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'id_departemens'=> 'required',
            'email'         => 'required|email',
            'nomor_hp'      => 'required|numeric',
            'alamat'        => 'required',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $pegawai['nama_pegawai']    = $request->nama_pegawai;
        $pegawai['jenis_kelamin']   = $request->jenis_kelamin;
        $pegawai['tanggal_lahir']   = $request->tanggal_lahir;
        $pegawai['id_departemens']  = $request->id_departemens;
        $pegawai['email']           = $request->email;
        $pegawai['nomor_hp']        = $request->nomor_hp;
        $pegawai['alamat']          = $request->alamat;

        // dd($request->all());
        Pegawai::create($pegawai);
        return redirect()->route('pegawai.index');

    }

    public function edit(Request $request, $id){

        $pegawai = Pegawai::find($id);
        $departemen = Departemen::all();
        return view('pegawai.edit-pegawai', compact('pegawai', 'departemen'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'nama_pegawai'  => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'id_departemens'=> 'required',
            'email'         => 'required',
            'nomor_hp'      => 'required',
            'alamat'        => 'required',
        ]);
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $pegawai['nama_pegawai']    = $request->nama_pegawai;
        $pegawai['jenis_kelamin']   = $request->jenis_kelamin;
        $pegawai['tanggal_lahir']   = $request->tanggal_lahir;
        $pegawai['id_departemens']  = $request->id_departemens;
        $pegawai['email']           = $request->email;
        $pegawai['nomor_hp']        = $request->nomor_hp;
        $pegawai['alamat']          = $request->alamat;

        Pegawai::whereId($id)->update($pegawai);

        return redirect()->route('pegawai.index');
    }

    public function delete(Request $request, $id){
        $pegawai = Pegawai::find($id);

        if($pegawai){
            $pegawai->delete();
        }

        return redirect()->route('pegawai.index');
    }

    public function detail($id){

        $pegawai = Pegawai::findOrFail($id);

        return view ('pegawai.detail_pegawai', compact('pegawai'));
    }

}
