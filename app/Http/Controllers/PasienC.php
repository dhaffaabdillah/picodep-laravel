<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Models\Pasien;
use App\Models\StatusPasien;
use App\Models\Agama;


class PasienC extends Controller
{
    // open view utama
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
        //
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

    public function show(Pasien $pasien)
    {
        return view('admin.pasien.detailPasien', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        $agama      = Agama::all();
        $statuses   = StatusPasien::all();
        return view('admin.pasien.editPasien', compact('pasien','statuses', 'agama',));
    }

    public function update(Request $request, Pasien $pasien)
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

        $pasien->update($request->all());

        return redirect()->route('pasien.index')
                        ->with('success', 'Pasien berhasil diperbaharui!');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index')
                        ->with('success', 'Data pasien berhasil dihapus');
    }
}
