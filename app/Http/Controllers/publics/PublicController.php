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

    public function indonesia()
    {
        $dataIndonesia  = Http::get('https://api.kawalcorona.com/indonesia');
        $dataCov        = $dataIndonesia->json();
        dd($dataCov);
        return view('sebaranIndo', compact('dataCov'));
    }

    public function depok()
    {
        $apiPicodep     = Http::get('https://picodep.depok.go.id/Homee/getWidget');
        $getDataPicodep = $apiPicodep->json();
        return view('sebaranDepok', compact('getDataPicodep'));
    }
}

