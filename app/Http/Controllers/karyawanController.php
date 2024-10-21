<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::Paginate(5);
        return view('karyawan.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tanggal_masuk' => 'required|date',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'nullable|date_format:H:i',
            'gaji' => 'required|numeric',
        ]);

        // Membuat karyawan baru
        Karyawan::create($request->all());

        // Mengarahkan kembali ke daftar karyawan dengan pesan sukses
        return redirect()->back()->with('success', 'Karyawan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }
    
     

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required|numeric',
        ]);
    
        // Ambil data karyawan yang ingin diupdate
        Karyawan::where('id', $id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Berhasil mengupdate data karyawan!');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $deleteKaryawan = Karyawan::where('id', $id)->delete();
        if ($deleteKaryawan) {
            return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
        }
    }
}
