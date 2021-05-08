<?php

namespace App\Http\Controllers;

use App\Models\StatusPasien;
use Illuminate\Http\Request;

class StatusPasienController extends Controller
{
    public function index()
    {
        $status = StatusPasien::all();
        return view('admin.statuspasien.Status', compact('status'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaStatus' => 'required'
        ]);

        StatusPasien::create($request->all());
        return redirect()->route('status-pasien.index')
                        ->with('success', 'Status pasien berhasil ditambahkan');
    }

    public function show($id)
    {
        $status = StatusPasien::find($id);
        return view('admin.statuspasien.showStatus', compact('status'));
    }

    public function edit($id)
    {
        $status = StatusPasien::find($id);
        return view('admin.statuspasien.editStatus', compact('status'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'NamaStatus' => 'required'
        ]);

        StatusPasien::find($id)->update($request->all());
        return redirect()->route('status-pasien.index')->with('success', 'Berhasil diperbaharui');
    }

    public function destroy($id)
    {
        StatusPasien::find($id)->delete();
        return redirect()->route('status-pasien.index')->with('success', 'Berhasil dihapus');
    }
}
