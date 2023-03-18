<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sisw = Siswa::latest()->paginate(5);

        return view('sisw.index', compact('sisw'))
        ->with('number',  (request('page', 1) -1) * 5 + 1);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sisw.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nis' => 'required|unique:data_siswa,nis|min:5',
            'nama' => 'required|unique:data_siswa,nama',
            'kelas' => 'required',
            'no_hp' => 'required|min:10|max:12',
            'keterangan' => 'required'
            
        ],  [
                'nis.unique' => 'NIS Sudah terdaftar',
                'nis.required' => 'NIS Harus diisi',
                'nis.min' => 'NIS Minimal 5 digit',

                'nama.unique' => 'Nama Sudah terdaftar',
                'nama.required' => 'Nama tidak boleh kosong',

                'kelas.required' => 'Kelas tidak boleh kosong',

                'no_hp.required' => 'Nomor HP Harus diisi',
                'no_hp.min' => 'Nomor HP Minimal 10 digit',
                'no_hp.max' => 'Nomor HP Maksimal 12 digit',
        ]);

        Siswa::create($request->all());

        return redirect()->route('sisw.index')
        ->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $sisw)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $sisw)
    {
        return view('sisw.edit', compact('sisw'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $sisw)
    {
        $nama = $request->input('nama');
        $no_hp = $request->input('no_hp');

        if (preg_match('/[0-9]/', $nama)) {
            return redirect()->back()
            ->with('error', 'Nama tidak boleh berisi angka');
        }
    
        $sisw->nama = $request->input('nama');
        $sisw->kelas = $request->input('kelas');
        $sisw->no_hp = $request->input('no_hp');
        $sisw->keterangan = $request->input('keterangan');
        $sisw->save();

        return redirect()->route('sisw.index')
        ->with('success', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $sisw)
    {
        $sisw->delete();

        return redirect()->route('sisw.index')
        ->with('success', 'Data Berhasil dihapus');
    }
}
