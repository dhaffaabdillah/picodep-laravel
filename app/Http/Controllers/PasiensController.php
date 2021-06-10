<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Pasien;
use App\Models\StatusPasien;
use Illuminate\Http\Request;

class PasiensController extends Controller
{
    public function index()
    {
        $pasiens    = Pasien::latest()->paginate(10);
        $agama      = Agama::all();
        $statuses   = StatusPasien::all();

        return view('admin.pasien.pasien', compact('pasiens', 'agama', 'statuses'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        // # code...
    }

    public function store(Request $request)
    {
        // validasi data 
        $request->validate([
            // 'title'                 =>  'required',
            'NamaPasien'            =>  'required',
            'JenisKelamin'          =>  'required',
            'Alamat'                =>  'required',
            'KelurahanTinggal'      =>  'required',
            'KecamatanTinggal'      =>  'required',
            'TanggalLahir'          =>  'required',
            'StatusPasien'          =>  'required',
            'Agama'                 =>  'required',
            'TanggalPemeriksaan'    =>  'required',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')
                        ->with('success', 'Pasien baru berhasil ditambahkan!');
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.detailPasien', compact('pasien'));
    }

    public function edit($id)
    {
        $pasien     = Pasien::find($id);
        $agama      = Agama::all();
        $statuses   = StatusPasien::all();
        return view('admin.pasien.editPasien', compact('pasien', 'agama', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        // validasi data 
        $request->validate([
            'NamaPasien'            =>  'required',
            'JenisKelamin'          =>  'required',
            'StatusPasien'          =>  'required',
            'TempatIsolasi'         =>  'required',
            'TanggalPemeriksaan'    =>  'required',
            'TanggalLahir'          =>  'required',
            'Agama'                 =>  'required',
            'KelurahanTinggal'      =>  'required',
            'KecamatanTinggal'      =>  'required',
            'Alamat'                =>  'required',
            
        ]);

        // $pasien->update($request->all());
        Pasien::find($id)->update($request->all());
        return redirect()->route('pasien.index')
                        ->with('success', 'Pasien berhasil diperbaharui!');
    }
}
