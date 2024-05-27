<?php

namespace App\Http\Controllers;

use App\Models\WaliSantri;
use App\Models\CalonSantri;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class WaliSantriController extends Controller
{
    public function index()
    {
        $walisantri = WaliSantri::all();
        return view('InformasiOrangTuaa.index', compact('walisantri'));
    }

    public function create()
    {
        $calonsantri = CalonSantri::all();
        return view('InformasiOrangTuaa.create', compact('calonsantri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Wali' => 'required',
            'Nama_Wali' => 'required',
            'Hubungan_Wali' => '',
            'Alamat_Wali' => 'required',
            'No_Telepon_Wali' => 'required',
            'Email_Wali' => 'required',
            'ID_Calon_Santri' => 'required|unique:wali_santri,ID_Calon_Santri'
        ]);
        WaliSantri::create($request->all());

        return redirect()->route('wali_santri.index')->with('success', 'Informasi Orang Tua created successfully.');
    }

    public function show($id)
    {
        $walisantri = WaliSantri::find($id);
        return view('InformasiOrangTuaa.show', compact('walisantri'));
    }

    public function edit($id)
    {
        $walisantri = WaliSantri::find($id);
        $calonsantri = CalonSantri::all();
        if ($walisantri) {
            return view('InformasiOrangTuaa.edit', compact('walisantri', 'calonsantri'));
        } else {
            return redirect()->route('wali_santri.index')->with('error', 'Informasi Orang Tua not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Wali' => 'required|String|max:100',
            'Hubungan_Wali' => 'required',
            'Alamat_Wali' => 'required',
            'No_Telepon_Wali' => 'required|string|max:12',
            'Email_Wali' => '',
            'ID_Calon_Santri' => 'required|unique:wali_santri,ID_Calon_Santri',
        ]);

        $walisantri = WaliSantri::find($id);

            if ($walisantri ) {
                $walisantri ->update($request->all());
            return redirect()->route('wali_santri.index')->with('success', 'Informasi Orang Tua updated successfully.');
            } else {
            return redirect()->route('wali_santri.index')->with('error', 'Informasi Orang Tua not found.');
            }
    }


    public function destroy($id)
    {
        $walisantri = WaliSantri::find($id);
    
        if ($walisantri) {
            $walisantri->delete();
            return redirect()->route('wali_santri.index')->with('success', 'Informasi Orang Tua delete successfully');
        } else {
            return redirect()->route('wali_santri.index')->with('error', 'Informasi Orang Tua not found');
        }
    }

    public function exportpdf(){
        $walisantri = WaliSantri::all();
        $pdf = PDF::loadView('InformasiOrangTuaa.report', compact('walisantri'));
        return $pdf->download('data-Wali-Santri.pdf');
    }
}
