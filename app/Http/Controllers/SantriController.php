<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\CalonSantri;
use App\Models\Santri;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class SantriController extends Controller
{
    public function index()
    {
        $santri = Santri::all();
        return view('SantriTerdaftarr.index', compact('santri'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        $calonsantri = CalonSantri::all();
        return view('SantriTerdaftarr.create', compact('kelas','calonsantri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Santri' => 'required',
            'ID_Calon_Santri' => '',
            'Nama' => 'required',
            'Tanggal_Diterima' => '',
            'ID_Kelas' => 'required'
        ]);
        Santri::create($request->all());

        return redirect()->route('santri.index')->with('success', 'Santri created successfully.');
    }

    public function show($id)
    {
        $santri = Santri::find($id);
    
        if (!$santri) {
            return redirect()->route('santri.index')->with('error', 'Santri not found.');
        }
    
        return view('SantriTerdaftarr.show', compact('santri'));
    }
    

    public function edit($id)
{
    $santri = Santri::find($id);

    if (!$santri) {
        return redirect()->route('santri.index')->with('error', 'Santri not found.');
    }

    $kelas = Kelas::all();
    $calonsantri = CalonSantri::all();

    return view('SantriTerdaftarr.edit', compact('santri', 'kelas', 'calonsantri'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Calon_Santri' => 'required|string|max:12',
            'Nama' => '',
            'Tanggal_Diterima' => 'required',
            'ID_Kelas' => '',
        ]);

        $santri = Santri::find($id);

            if ($santri ) {
                $santri ->update($request->all());
            return redirect()->route('santri.index')->with('success', 'Santri updated successfully.');
            } else {
            return redirect()->route('santri.index')->with('error', 'Santri not found.');
            }
    }


    public function destroy($id)
    {
        $santri = Santri::find($id);
    
        if ($santri) {
            $santri->delete();
            return redirect()->route('santri.index')->with('success', 'Santri delete successfully');
        } else {
            return redirect()->route('santri.index')->with('error', 'Santri Ujian not found');
        }
    }


    public function exportpdf(){
        $santri = Santri::all();
        $pdf = PDF::loadView('SantriTerdaftarr.report', compact('santri'));
        return $pdf->download('data-santri.pdf');
    }
}
