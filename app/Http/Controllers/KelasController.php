<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use Barryvdh\DomPDF\Facade\PDF;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('Kelass.index', compact('kelas'));
    }

    public function create()
    {
        return view('Kelass.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Kelas' => 'required',
            'Level_Kelas' => 'required',
            'Kapasitas_Kelas' => 'required',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Kelas created successfully.');
    }

    public function show($id)
    {
        $kelas = Kelas::find($id);
        return view('Kelass.show', compact('kelas'));
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('Kelass.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Level_Kelas' => 'string|max:100',
        '   Kapasitas_Kelas' => 'required|string|max:100', // Perbaiki tipe validasi jika diperlukan
        ]);

        $kelas = Kelas::find($id);

            if ($kelas) {
                $kelas->update($request->all());
            return redirect()->route('kelas.index')->with('success', 'Kelas updated successfully.');
            } else {
            return redirect()->route('kelas.index')->with('error', 'Kelas not found.');
            }
    }


    public function destroy($id)
    {
        $kelas = Kelas::find($id);
    
        if ($kelas) {
            $kelas->delete();
            return redirect()->route('kelas.index')->with('success', 'Kelas delete successfully');
        } else {
            return redirect()->route('kelas.index')->with('error', 'Kelas not found');
        }
    }
    public function exportpdf(){
        $kelas = Kelas::all();
        $pdf = PDF::loadView('Kelass.report', compact('kelas'));
        return $pdf->download('data-kelas.pdf');
    }
}