<?php

namespace App\Http\Controllers;

use App\Models\BiayaPondok;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Santri;
use Illuminate\Http\Request;

class BiayaPondokController extends Controller
{
    public function index()
    {
        $biayapondok = BiayaPondok::all();
        return view('BiayaPondokk.index', compact('biayapondok'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('BiayaPondokk.create', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Biaya_Pondok' => 'required',
            'ID_Santri' => 'required',
            'Nama_Biaya' => '',
            'Jenis_Biaya' => '',
            'Deskripsi' => 'required',
            'Total_Biaya' => 'required',
            'Tanggal_Berlaku' => 'required'
        ]);
        BiayaPondok::create($request->all());

        return redirect()->route('biaya_pondok.index')->with('success', 'Biaya Pondok created successfully.');
    }

    public function show($id)
    {
        $biayapondok = BiayaPondok::find($id);
    
        if (!$biayapondok) {
            return redirect()->route('biaya_pondok.index')->with('error', 'Biaya Pondok not found.');
        }
    
        return view('BiayaPondokk.show', compact('biayapondok'));
    }
    

    public function edit($id)
    {
        $biayapondok = BiayaPondok::find($id);
        $santri = Santri::all();
        if ($biayapondok) {
            return view('BiayaPondokk.edit', compact('biayapondok', 'santri'));
        } else {
            return redirect()->route('biaya_pondok.index')->with('error', 'Biaya Pondok not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Biaya_Pondok' => 'required|string|max:12',
            'ID_Santri' => 'required',
            'Nama_Biaya' => '',
            'Deskripsi' => 'required|string',
            'Total_Biaya' => 'required|int',
            'Tanggal_Berlaku' => 'required',
        ]);

        $biayapondok= BiayaPondok::find($id);

            if ($biayapondok ) {
                $biayapondok ->update($request->all());
            return redirect()->route('biaya_pondok.index')->with('success', 'Biaya Pondok updated successfully.');
            } else {
            return redirect()->route('biaya_pondok.index')->with('error', 'Biaya Pondok not found.');
            }
    }


    public function destroy($id)
    {
        $biayapondok = BiayaPondok::find($id);
    
        if ($biayapondok) {
            $biayapondok->delete();
            return redirect()->route('biaya_pondok.index')->with('success', 'Biaya Pondok Delete successfully');
        } else {
            return redirect()->route('biaya_pondok.index')->with('error', 'Biaya Pondok not found');
        }
    }


    public function exportpdf(){
        $biayapondok = BiayaPondok::all();
        $pdf = PDF::loadView('BiayaPondokk.report', compact('biayapondok'));
        return $pdf->download('data-Biaya-Pondok.pdf');
    }
}
