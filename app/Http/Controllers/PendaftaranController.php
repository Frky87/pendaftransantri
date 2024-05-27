<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;


class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftarann.index', compact('pendaftaran'));
    }

    public function create()
    {
        return view('pendaftarann.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Pendaftaran' => 'required|unique:pendaftaran|max:10',
            'Tanggal_Pendaftaran' => 'required|date',
            'Status_Pendaftaran' => 'required|string|max:100',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran.index')
                         ->with('success', 'Pendaftaran berhasil dibuat.');
    }

    public function show($ID_Pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($ID_Pendaftaran);
        return view('pendaftarann.show', compact('pendaftaran'));
    }

    public function edit($ID_Pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($ID_Pendaftaran);
        return view('pendaftarann.edit', compact('pendaftaran'));
    }

    public function update(Request $request, $ID_Pendaftaran)
    {
        $request->validate([
            'Tanggal_Pendaftaran' => 'required|date',
            'Status_Pendaftaran' => 'required|string|max:100',
        ]);

        $pendaftaran = Pendaftaran::find($ID_Pendaftaran);
        $pendaftaran->update($request->all());

        return redirect()->route('pendaftaran.index')
                         ->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy($ID_Pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($ID_Pendaftaran);
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')
                         ->with('success', 'Pendaftaran delete successfully.');
    }

    public function exportpdf(){
        $pendaftaran = Pendaftaran::all();
        $pdf = PDF::loadView('Pendaftarann.report', compact('pendaftaran'));
        return $pdf->download('data-pendaftaran.pdf');
    }
}
