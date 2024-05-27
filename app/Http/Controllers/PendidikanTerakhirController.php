<?php

namespace App\Http\Controllers;

use App\Models\CalonSantri;
use App\Models\PendidikanTerakhir;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PendidikanTerakhirController extends Controller
{
    public function index()
    {
        $pendidikanterakhir = PendidikanTerakhir::all();
        return view('PendidikanTerakhirr.index', compact('pendidikanterakhir'));
    }

    public function create()
    {
        $calonsantri = CalonSantri::all();
        return view('PendidikanTerakhirr.create', compact('calonsantri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Pendidikan' => 'required',
            'Tingkatan_Pendidikan' => '',
            'Nama_Sekolah' => '',
            'Tahun_Lulus_Sekolah' => 'required',
            'Pendidikan_Non_Formal' => 'required',
            'Tahun_Lulus' => 'required',
            'ID_Calon_Santri' => 'required|unique:pendidikan_terakhir,ID_Calon_Santri'
        ]);
        PendidikanTerakhir::create($request->all());

        return redirect()->route('pendidikan_terakhir.index')->with('success', 'Pendidikan Terakhir created successfully.');
    }

    public function show($id)
    {
        $pendidikanterakhir = PendidikanTerakhir::find($id);
        return view('PendidikanTerakhirr.show', compact('pendidikanterakhir'));
    }

    public function edit($id)
    {
        $pendidikanterakhir = PendidikanTerakhir::find($id);
        $calonsantri = CalonSantri::all();
        if ($pendidikanterakhir) {
            return view('PendidikanTerakhirr.edit', compact('pendidikanterakhir', 'calonsantri'));
        } else {
            return redirect()->route('pendidikan_terakhir.index')->with('error', 'Pendidikan Terakhir not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Tingkatan_Pendidikan' => '',
            'Nama_Sekolah' => 'required',
            'Tahun_Lulus_Sekolah' => 'required',
            'Pendidikan_Non_Formal' => 'required|string|max:12',
            'Tahun_Lulus' => '',
            'ID_Calon_Santri' => 'required|string|max:12',
        ]);

        $pendidikanterakhir = PendidikanTerakhir::find($id);

            if ($pendidikanterakhir ) {
                $pendidikanterakhir ->update($request->all());
            return redirect()->route('pendidikan_terakhir.index')->with('success', 'Pendidikan Terakhir updated successfully.');
            } else {
            return redirect()->route('pendidikan_terakhir.index')->with('error', 'Pendidikan Terakhir not found.');
            }
    }


    public function destroy($id)
    {
        $pendidikanterakhir = PendidikanTerakhir::find($id);
    
        if ($pendidikanterakhir) {
            $pendidikanterakhir->delete();
            return redirect()->route('pendidikan_terakhir.index')->with('success', 'Pendidikan Terakhir delete successfully');
        } else {
            return redirect()->route('pendidikan_terakhir.index')->with('error', 'Pendidikan Terakhir not found');
        }
    }

    public function exportpdf(){
        $pendidikanterakhir = PendidikanTerakhir::all();
        $pdf = PDF::loadView('PendidikanTerakhirr.report', compact('pendidikanterakhir'));
        return $pdf->download('data-pendidikan-terakhir.pdf');
    }
}
