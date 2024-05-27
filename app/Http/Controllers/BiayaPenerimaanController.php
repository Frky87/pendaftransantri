<?php

namespace App\Http\Controllers;

use App\Models\CalonSantri;
use App\Models\BiayaPenerimaan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class BiayaPenerimaanController extends Controller
{
    public function index()
    {
        $biayapenerimaan = BiayaPenerimaan::all();
        return view('BiayaPenerimaann.index', compact('biayapenerimaan'));
    }

    public function create()
    {
        $calonsantri = CalonSantri::all();
        return view('BiayaPenerimaann.create', compact('calonsantri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Biaya_Penerimaan' => 'required |unique:biaya_penerimaan,ID_Biaya_Penerimaan',
            'ID_Calon_Santri' => '',
            'Jenis_Pembayaran' => '',
            'Biaya' => '',
            'Deskripsi' => 'required'
        ]);
        BiayaPenerimaan::create($request->all());

        return redirect()->route('biaya_penerimaan.index')->with('success', 'Biaya Penerimaan created successfully.');
    }

    public function show($id)
    {
        $biayapenerimaan = BiayaPenerimaan::find($id);
    
        if (!$biayapenerimaan) {
            return redirect()->route('biaya_penerimaan.index')->with('error', 'Biaya Penerimaan not found.');
        }
    
        return view('BiayaPenerimaann.show', compact('biayapenerimaan'));
    }
    

    public function edit($id)
    {
        $biayapenerimaan = BiayaPenerimaan::find($id);
        $calonsantri = CalonSantri::all();
        if ($biayapenerimaan) {
            return view('BiayaPenerimaan.edit', compact('biayapenerimaan', 'calonsantri'));
        } else {
            return redirect()->route('biaya_penerimaan.index')->with('error', 'Biaya Penerimaan not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Calon_Santri' => 'required|string|max:12',
            'Jenis_Pembayaran' => '',
            'Biaya' => 'required',
            'Deskripsi' => 'required|string|max:100',
        ]);

        $biayapenerimaan = BiayaPenerimaan::find($id);

            if ($biayapenerimaan ) {
                $biayapenerimaan ->update($request->all());
            return redirect()->route('biaya_penerimaan.index')->with('success', 'Biaya Penerimaan updated successfully.');
            } else {
            return redirect()->route('biaya_penerimaan.index')->with('error', 'Biaya Penerimaan not found.');
            }
    }


    public function destroy($id)
    {
        $biayapenerimaan = BiayaPenerimaan::find($id);
    
        if ($biayapenerimaan) {
            $biayapenerimaan->delete();
            return redirect()->route('biaya_penerimaan.index')->with('success', 'Biaya Penerimaan successfully');
        } else {
            return redirect()->route('biaya_penerimaan.index')->with('error', 'Biaya Penerimaan terakhir not found');
        }
    }


    public function exportpdf(){
        $biayapenerimaan = BiayaPenerimaan::all();
        $pdf = PDF::loadView('BiayaPenerimaann.report', compact('biayapenerimaan'));
        return $pdf->download('data-biaya-penerimaan.pdf');
    }
}
