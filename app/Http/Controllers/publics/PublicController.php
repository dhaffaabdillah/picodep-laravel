<?php

namespace App\Http\Controllers\publics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function index()
    {
        // $api            = Http::get('https://api.kawalcorona.com');
        return view('index');
    }

    public function allReg()
    {
        return view('allRegion');
    }

    public function allregion()
    {
        $api    = Http::get('https://api.kawalcorona.com');
        $getReg = $api->json();
        dd($getReg);
        return view('semuaNegara', compact('getReg'));
    }

    public function indonesia()
    {
        $dataIndonesia  = Http::get('https://api.kawalcorona.com/indonesia');
        $dataCov        = $dataIndonesia->json();
        // dd($dataCov);
        return view('dataIndonesia', compact('dataCov'));
    }

    public function provinsi()
    {
        $dataProv   = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $getDataProv= $dataProv->json();
        // dd($getDataProv);
        return view('dataProvinsi', compact('getDataProv'));
    }

    public function getDataDepok()
    {
        $apiPicodep     = Http::get('https://picodep.depok.go.id/Homee/getWidget');
        $dataDepok      = $apiPicodep->json();
        // json_encode($apiPicodep);
        // dd($dataDepok);
        return view('dataDepok', compact('dataDepok'));
    }

    public function getDepok()
    {
        $api = Http::get('https://picodep.depok.go.id/Homee/getWidget');
        json_encode($api);
    }
}

