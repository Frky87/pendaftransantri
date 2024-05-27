<?php

namespace App\Http\Controllers;

use App\Models\PelaksanaanUjian;
use App\Models\CalonSantri;
use App\Models\HasilUjian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class HasilUjianController extends Controller
{
    public function index()
    {
        $hasilujian = HasilUjian::all();
        return view('HasilUjiann.index', compact('hasilujian'));
    }

    public function create()
    {
        $ujian = PelaksanaanUjian::all();
        $calonsantri = CalonSantri::all();
        return view('HasilUjiann.create', compact('ujian','calonsantri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Hasil_Ujian' => 'required',
            'ID_Pelaksanaan_Ujian' => 'required|unique:hasil_ujian,ID_Pelaksanaan_Ujian',
            'ID_Calon_Santri' => 'required|unique:hasil_ujian,ID_Calon_Santri',
            'Jumlah_Soal' => '',
            'Waktu_Selesai' => '',
            'Nilai_Akhir' => 'required'
        ]);
        HasilUjian::create($request->all());

        return redirect()->route('hasil_ujian.index')->with('success', 'Hasil Ujian created successfully.');
    }

    public function show($id)
    {
        $hasilujian = HasilUjian::find($id);
    
        if (!$hasilujian) {
            return redirect()->route('hasil_ujian.index')->with('error', 'Hasil Ujian not found.');
        }
    
        return view('HasilUjiann.show', compact('hasilujian'));
    }
    

    public function edit($id)
{
    $hasilujian = HasilUjian::find($id);

    if (!$hasilujian) {
        return redirect()->route('hasil_ujian.index')->with('error', 'Hasil Ujian not found.');
    }

    $ujian = PelaksanaanUjian::all();
    $calonsantri = CalonSantri::all();

    return view('HasilUjiann.edit', compact('hasilujian', 'ujian', 'calonsantri'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Pelaksanaan_Ujian' => 'required|string|max:12',
            'ID_Calon_Santri' => '',
            'Jumlah_Soal' => 'required',
            'Waktu_Selesai' => '',
            'Nilai_Akhir' => 'required|int',
        ]);

        $hasilujian = HasilUjian::find($id);

            if ($hasilujian ) {
                $hasilujian ->update($request->all());
            return redirect()->route('hasil_ujian.index')->with('success', 'Hasil Ujian updated successfully.');
            } else {
            return redirect()->route('hasil_ujian.index')->with('error', 'Hasil Ujian not found.');
            }
    }


    public function destroy($id)
    {
        $hasilujian = HasilUjian::find($id);
    
        if ($hasilujian) {
            $hasilujian->delete();
            return redirect()->route('hasil_ujian.index')->with('success', 'Hasil Ujian delete successfully');
        } else {
            return redirect()->route('hasil_ujian.index')->with('error', 'Hasil Ujian not found');
        }
    }


    public function exportpdf(){
        $hasilujian = HasilUjian::all();
        $pdf = PDF::loadView('Hasilujiann.report', compact('hasilujian'));
        return $pdf->download('data-hasil_ujian.pdf');
    }
}
