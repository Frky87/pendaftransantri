<?php

namespace App\Http\Controllers;

use App\Models\CalonSantri;
use App\Models\Wawancara;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class WawancaraController extends Controller
{
    public function index()
    {
        $wawancara = Wawancara::all();
        return view('Wawancaraa.index', compact('wawancara'));
    }

    public function create()
    {
        $calonsantri = CalonSantri::all();
        return view('Wawancaraa.create', compact('calonsantri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Wawancara' => 'required',
            'ID_Calon_Santri' => 'required|unique:wawancara,ID_Calon_Santri',
            'Tanggal_Wawancara' => '',
            'Mulai_Wawancara' => '',
            'Pewawancara' => 'required',
            'Nilai_Wawancara' => 'required'
        ]);
        Wawancara::create($request->all());

        return redirect()->route('wawancara.index')->with('success', 'Wawancara created successfully.');
    }

    public function show($id)
    {
        $wawancara = Wawancara::find($id);
    
        if (!$wawancara) {
            return redirect()->route('wawancara.index')->with('error', 'Wawancara not found.');
        }
    
        return view('Wawancaraa.show', compact('wawancara'));
    }
    

    public function edit($id)
    {
        $wawancara = Wawancara::find($id);
        $calonsantri = CalonSantri::all();
        if ($wawancara) {
            return view('Wawancaraa.edit', compact('wawancara', 'calonsantri'));
        } else {
            return redirect()->route('wawancara.index')->with('error', 'Wawancara not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Calon_Santri' => 'required|string|max:12',
            'Tanggal_Wawancara' => '',
            'Mulai_Wawancara' => 'required',
            'Pewawancara' => 'required|string|max:100',
            'Nilai_Wawancara' => 'required|int',
        ]);

        $wawancara = Wawancara::find($id);

            if ($wawancara ) {
                $wawancara ->update($request->all());
            return redirect()->route('wawancara.index')->with('success', 'Wawancara updated successfully.');
            } else {
            return redirect()->route('wawancara.index')->with('error', 'Wawancara not found.');
            }
    }


    public function destroy($id)
    {
        $wawancara = Wawancara::find($id);
    
        if ($wawancara) {
            $wawancara->delete();
            return redirect()->route('wawancara.index')->with('success', 'Wawancara successfully');
        } else {
            return redirect()->route('wawancara.index')->with('error', 'Wawancara terakhir not found');
        }
    }


    public function exportpdf(){
        $wawancara = Wawancara::all();
        $pdf = PDF::loadView('Wawancaraa.report', compact('wawancara'));
        return $pdf->download('data-wawancara.pdf');
    }

}
