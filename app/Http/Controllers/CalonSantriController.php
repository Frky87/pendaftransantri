<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\CalonSantri;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class CalonSantriController extends Controller
{
    public function index()
    {
        $calonsantri = CalonSantri::all();
        return view('Biodataa.index', compact('calonsantri'));
    }

    public function create()
    {
        $pendaftaran = Pendaftaran::all();
        return view('Biodataa.create', compact('pendaftaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Pendaftaran_Santri' => '',
            'Nama' => 'required',
            'Tempat_Tanggal_Lahir' => 'required',
            'Jenis_Kelamin' => '',
            'Alamat_Rumah' => 'required',
            'No_Telepon' => 'required',
            'ID_Pendaftaran' => 'required|unique:calon_santri,ID_Calon_Santri'
        ]);
        CalonSantri::create($request->all());

        return redirect()->route('calon_santri.index')->with('success', 'Calon Santri created successfully.');
    }

    public function show($id)
    {
        $calonsantri = CalonSantri::find($id);
        return view('Biodataa.show', compact('calonsantri'));
    }

    public function edit($id)
    {
        $calonsantri = CalonSantri::find($id);
        $pendaftaran = Pendaftaran::all();
        if ($calonsantri) {
            return view('Biodataa.edit', compact('calonsantri', 'pendaftaran'));
        } else {
            return redirect()->route('calon_santri.index')->with('error', 'Biodata not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|String|max:100',
            'Jenis Kelamin' => '',
            'Tempat_TanggalLahir' => '',
            'Alamat_Rumah' => 'required',
            'No_Telepon' => 'required|string|max:12',
            'ID_Pendaftaran' => 'required|unique:calon_santri,ID_Calon_Santri',
        ]);

        $calonsantri = CalonSantri::find($id);

            if ($calonsantri ) {
                $calonsantri ->update($request->all());
            return redirect()->route('calon_santri.index')->with('success', 'Biodata updated successfully.');
            } else {
            return redirect()->route('calon_santri.index')->with('error', 'Biodata not found.');
            }
    }


    public function destroy($id)
    {
        $calonsantri = CalonSantri::find($id);
    
        if ($calonsantri) {
            $calonsantri->delete();
            return redirect()->route('calon_santri.index')->with('success', 'Biodata delete successfully');
        } else {
            return redirect()->route('calon_santri.index')->with('error', 'Biodata not found');
        }
    }
    public function exportpdf(){
        $calonsantri = CalonSantri::all();
        $pdf = PDF::loadView('Biodataa.report', compact('calonsantri'));
        return $pdf->download('data-Biodata.pdf');
    }

    public function getCalonSantri($id)
{
    $calonSantri = CalonSantri::find($id);

    if ($calonSantri) {
        return response()->json($calonSantri);
    } else {
        return response()->json(null, 404);
    }
}

}
