<?php

namespace App\Http\Controllers;

use App\Models\BiayaPenerimaan;
use App\Models\BiayaPondok;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('Pembayarann.index', compact('pembayaran'));
    }

    public function create()
    {
        $biayapenerimaan = BiayaPenerimaan::all();
        $biayapondok = BiayaPondok::all();
        return view('Pembayarann.create', compact('biayapenerimaan','biayapondok'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Pembayaran' => 'required',
            'ID_Biaya_Penerimaan' => 'required',
            'ID_Biaya_Pondok' => 'required',
            'Tanggal_Pembayaran' => 'required',
            'Jenis_Pembayaran' => '',
            'Status_Pembayaran' => '',
            'Petugas_Pembayaran' => ''
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dibuat.');
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);
    
        if (!$pembayaran) {
            return redirect()->route('pembayaran.index')->with('error', 'Pembayaran not found.');
        }
    
        return view('Pembayarann.show', compact('pembayaran'));
    }
    

    public function edit($id)
{
    $pembayaran = Pembayaran::find($id);

    if (!$pembayaran) {
        return redirect()->route('pembayaran.index')->with('error', 'Pembayaran not found.');
    }

    $biayapenerimaan = BiayaPenerimaan::all();
    $biayapondok = BiayaPondok::all();

    return view('Pembayarann.edit', compact('pembayaran', 'biayapenerimaan', 'biayapondok'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Biaya_Penerimaan' => '',
            'ID_Biaya_Pondok' => '',
            'Tanggal_Pembayaran' => '',
            'Jenis_Pembayaran' => '',
            'Status_Pembayaran' => '',
            'Petugas_Pembayaran' => '',
        ]);

        $pembayaran = Pembayaran::find($id);

            if ($pembayaran ) {
                $pembayaran ->update($request->all());
            return redirect()->route('pembayaran.index')->with('success', 'Pembayaran updated successfully.');
            } else {
            return redirect()->route('pembayaran.index')->with('error', 'Pembayaran not found.');
            }
    }


    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
    
        if ($pembayaran) {
            $pembayaran->delete();
            return redirect()->route('pembayaran.index')->with('success', 'Pembayaran delete successfully');
        } else {
            return redirect()->route('pembayaran.index')->with('error', 'Pembayaran not found');
        }
    }


    public function exportpdf(){
        $pembayaran = Pembayaran::all();
        $pdf = PDF::loadView('Pembayarann.report', compact('pembayaran'));
        return $pdf->download('data-pembayaran.pdf');
    }
}
