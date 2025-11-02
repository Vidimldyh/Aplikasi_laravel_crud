<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;




class MahasiswaController extends Controller
{
    // READ
  public function index(Request $request)
{
    $keyword = $request->input('search');

    // Query data dengan pencarian + pagination 5 data per halaman
    $mahasiswas = Mahasiswa::when($keyword, function ($query, $keyword) {
        return $query->where('nama', 'like', "%{$keyword}%")
                    ->orWhere('nim', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%");
    })
    ->orderBy('nama', 'asc')
    ->paginate(5); // ✅ tampil 5 data per halaman

    // agar parameter search ikut terbawa saat pindah halaman
    $mahasiswas->appends(['search' => $keyword]);

    return view('mahasiswa.index', compact('mahasiswas', 'keyword'));
}




    // CREATE FORM
    public function create()
    {
        return view('mahasiswa.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'email' => 'required|email|unique:mahasiswas',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil ditambahkan!');
    }

    // EDIT FORM
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // UPDATE
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas,nim,'.$mahasiswa->id,
            'email' => 'required|email|unique:mahasiswas,email,'.$mahasiswa->id,
        ]);

        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil diperbarui!');
    }

    // DELETE
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil dihapus!');
    }

    //PDF
    public function cetakPdf()
    {
        $mahasiswa = Mahasiswa::all();
        $pdf = Pdf::loadView('mahasiswa.pdf', compact('mahasiswa'));
        return $pdf->download('daftar_mahasiswa.pdf');
    }
    //export excel
public function exportExcel()
{
    return Excel::download(new MahasiswaExport, 'daftar_mahasiswa.xlsx');
}

}