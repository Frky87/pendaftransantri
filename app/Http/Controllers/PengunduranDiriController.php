<?php

namespace App\Http\Controllers;

use App\Models\PengunduranDiri;
use App\Models\Santri;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PengunduranDiriController extends Controller
{
    public function index()
    {
        $pengundurandiri = PengunduranDiri::all();
        return view('PengunduranDirii.index', compact('pengundurandiri'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('PengunduranDirii.create', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Pengunduran_Diri' => 'required',
            'ID_Santri' => 'required',
            'Tanggal_Pengunduran' => 'required|date',
            'Alasan_Pengunduran' => 'required|string',
            'Keterangan' => 'required|string',
            'Status_Pengunduran' => 'required|string|in:Diterima,Diproses,Ditolak'
        ]);

        PengunduranDiri::create($request->all());

        return redirect()->route('pengunduran_diri.index')->with('success', 'Pengunduran Diri created successfully.');
    }

    public function show($id)
    {
        $pengundurandiri = PengunduranDiri::find($id);

        if (!$pengundurandiri) {
            return redirect()->route('pengunduran_diri.index')->with('error', 'Pengunduran Diri not found.');
        }

        return view('PengunduranDirii.show', compact('pengundurandiri'));
    }

    public function edit($id)
    {
        $pengundurandiri = PengunduranDiri::find($id);
        $santri = Santri::all();

        if ($pengundurandiri) {
            return view('PengunduranDirii.edit', compact('pengundurandiri', 'santri'));
        } else {
            return redirect()->route('pengunduran_diri.index')->with('error', 'Pengunduran Diri not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Pengunduran_Diri' => 'required|string|max:10',
            'ID_Santri' => 'required',
            'Tanggal_Pengunduran' => 'required|date',
            'Alasan_Pengunduran' => 'required|string',
            'Keterangan' => 'required|string',
            'Status_Pengunduran' => 'required|string|in:Diterima,Diproses,Ditolak',
        ]);

        $pengundurandiri = PengunduranDiri::find($id);

        if ($pengundurandiri) {
            $pengundurandiri->update($request->all());
            return redirect()->route('pengunduran_diri.index')->with('success', 'Pengunduran Diri updated successfully.');
        } else {
            return redirect()->route('pengunduran_diri.index')->with('error', 'Pengunduran Diri not found.');
        }
    }

    public function destroy($id)
    {
        $pengundurandiri = PengunduranDiri::find($id);

        if ($pengundurandiri) {
            $pengundurandiri->delete();
            return redirect()->route('pengunduran_diri.index')->with('success', 'Pengunduran Diri deleted successfully.');
        } else {
            return redirect()->route('pengunduran_diri.index')->with('error', 'Pengunduran Diri not found.');
        }
    }

    public function exportpdf(){
        $pengundurandiri = PengunduranDiri::all();
        $pdf = PDF::loadView('PengunduranDirii.report', compact('pengundurandiri'));
        return $pdf->download('data-Pengunduran-Diri.pdf');
    }
}
