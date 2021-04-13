<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Models\Pasien;
use App\Models\StatusPasien;
use App\Models\Agama;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::paginate(5);
        $status = StatusPasien::all();
        $agama  = Agama::all();
        return view('admin.pasien.pasien', [
            // dd($pasien),
            'pasien'    => $pasien ,
            'status'    => $status ,
            'agama'     => $agama ,
        ]);
        // json_encode($pasien);
    }

    public function cariPasien(Request $request)
    {
        $cari = $request->cari;

        $pasien = DB::table('pasien')
                ->join('status_pasien', 'pasien.StatusPasien', '=', 'status_pasien.IdStatus')
                ->select('pasien.*', 'status_pasien.NamaStatus')
                ->where('NamaPasien', 'like', "%" .$cari. "%")
                ->paginate();
        $status = DB::table('status_pasien')->get();
        $agama = DB::table('agama')->get();

        return view('admin.pasien.pasien', [
            'pasien'            => $pasien,
            'status'            => $status ,
            'agama'             => $agama ,
        ]);
    }

    public function store(Request $request)
    {
        Pasien::create([
            'NamaPasien'            => $request->nama,
            'StatusPasien'          => $request->status,
            'Agama'                 => $request->agama,
            'Alamat'                => $request->alamat,
            'JenisKelamin'          => $request->gender,
            'TanggalLahir'          => $request->birthdate,
            'TanggalPemeriksaan'    => $request->checkdate,
            'KelurahanTinggal'      => $request->kelurahan,
            'KecamatanTinggal'      => $request->kecamatan,
        ]);

        //Session::flash('success', 'Data Pasien berhasil ditambahkan!');
        return redirect('/secret/pasien');
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.detailPasien', [
            'pasien' => $pasien,
        ]);
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        $status = StatusPasien::all();
        $agama  = Agama::all();
        return view('admin.pasien.editPasien', [
            'pasien'            => $pasien,
            'status'            => $status,
            'agama'             => $agama,
        ]);
    }

    public function update($id, Request $request)
    {
        // $this->validate($request, [
        //     'nama'      => 'required',
        //     'alamat'    => 'required',
        //     'status'    => 'required',

        // ]);

        // $pasien = Pasien::find($id);
        // $pasien->NamaPasien     = $request->nama;
        // $pasien->Alamat         = $request->alamat;
        // $pasien->StatusPasien   = $request->status;
        
        // $pasien->save();
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            // 'password' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Pasien::find($id)->update($request->all());    
        //Session::flash('success', 'Data pasien berhasil diperbaharui!');
        return redirect('/secret/pasien');
    }

    public function destroy($id)
    {
        //
    }
}
