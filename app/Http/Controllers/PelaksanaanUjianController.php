<?php

namespace App\Http\Controllers;

use App\Models\PelaksanaanUjian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PelaksanaanUjianController extends Controller
{
    public function index()
    {
        $ujian = PelaksanaanUjian::all();
        return view('JadwalUjiann.index', compact('ujian'));
    }

    public function create()
    {
        return view('JadwalUjiann.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Pelaksanaan_Ujian' => 'required|unique:pelaksanaan_ujians|max:10',
            'Tanggal_Ujian' => 'required|date',
            'Jenis_Ujian' => 'required|string|max:100',
            'Waktu_Mulai' => 'required',
            'Durasi_Ujian' => 'required',
            'Nilai_Minimum' => 'required',
        ]);

        PelaksanaanUjian::create($request->all());

        return redirect()->route('pelaksanaan_ujians.index')
                         ->with('success', 'Pelaksanaan Ujian created successfully.');
    }

    public function show($ID_Pelaksanaan_Ujian)
    {
        $ujian = PelaksanaanUjian::find($ID_Pelaksanaan_Ujian);
        return view('JadwalUjiann.show', compact('ujian'));
    }

    public function edit($ID_Pelaksanaan_Ujian)
    {
        $ujian = PelaksanaanUjian::find($ID_Pelaksanaan_Ujian);
        return view('JadwalUjiann.edit', compact('ujian'));
    }

    public function update(Request $request, $ID_Pelaksanaan_Ujian)
    {
        $request->validate([
            'Tanggal_Ujian' => 'required|date',
            'Jenis_Ujian' => 'required|string|max:100',
            'Waktu_Mulai' => 'required',
            'Durasi_Ujian' => 'required',
            'Nilai_Minimum' => 'required|integer',
        ]);

        $ujian = PelaksanaanUjian::find($ID_Pelaksanaan_Ujian);
        $ujian->update($request->all());

        return redirect()->route('pelaksanaan_ujians.index')
                         ->with('success', 'Pelaksanaan Ujian updated successfully.');
    }

    public function destroy($ID_Pelaksanaan_Ujian)
    {
        $ujian = PelaksanaanUjian::find($ID_Pelaksanaan_Ujian);
        $ujian->delete();

        return redirect()->route('pelaksanaan_ujians.index')
                         ->with('success', 'Pelaksanaan Ujian deleted successfully.');
    }

    public function exportpdf(){
        $ujian = PelaksanaanUjian::all();
        $pdf = PDF::loadView('JadwalUjiann.report', compact('ujian'));
        return $pdf->download('data-Jadwal.pdf');
    }
}
