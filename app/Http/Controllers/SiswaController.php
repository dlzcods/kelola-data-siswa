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
        $siswa = Siswa::latest()->paginate(5);

        return view('sisw.index', compact('siswa'))
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

            'nis' => 'required|unique:data_siswa,nis|numeric|digits_between:5,5',
            'nama' => 'required|unique:data_siswa,nama|regex:/^[a-zA-Z\s]*$/',
            'kelas' => 'required',
            'no_hp' => 'required|unique:data_siswa,no_hp|numeric|digits_between:10,12',
            'keterangan' => 'required',
            
        ],  
        
        [
                'nis.unique' => 'NIS sudah terdaftar',
                'nis.required' => 'NIS harus diisi',
                'nis.digits_between' => 'NIS harus 5 digit',

                'nama.required' => 'Nama harus diisi',
                'nama.unique' => 'Nama sudah terdaftar',
                'nama.regex' => 'Nama hanya boleh berisi huruf',

                'kelas.required' => 'Kelas harus diisi',

                'no_hp.required' => 'Nomor HP harus diisi',
                'no_hp.unique' => 'Nomor HP sudah terdaftar',
                'no_hp.digits_between' => 'Nomor HP minimal 10 digit serta maksimal 12 digit',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')
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
    public function edit(Siswa $siswa)
    {
        return view('sisw.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([

            /* 
            * kode '.$sisw->id.' digunakan sebagai parameter 'ignore' supaya mengabaikan validasi unique 
            * jika data sudah sesuai dengan yang ada di database berdasarkan primary key 
            */

            'nama' => 'required|unique:data_siswa,nama,'.$siswa->id.'|regex:/^[a-zA-Z\s]*$/',
            'no_hp' => 'required|unique:data_siswa,no_hp,'.$siswa->id.'|numeric|digits_between:10,12',

        ], 
        
        [
            'nama.required' => 'Nama harus diisi',
            'nama.unique' => 'Nama sudah terdaftar',
            'nama.regex' => 'Nama hanya boleh berisi huruf',

            'no_hp.required' => 'No HP harus diisi',
            'no_hp.unique' => 'No HP sudah terdaftar',
            'no_hp.digits_between' => 'Nomor HP minimal 10 digit serta maksimal 12 digit',
        ]);
    
        $siswa->nama = $request->input('nama');
        $siswa->kelas = $request->input('kelas');
        $siswa->no_hp = $request->input('no_hp');
        $siswa->keterangan = $request->input('keterangan');
        $siswa->save();

        return redirect()->route('siswa.index')
        ->with('success', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')
        ->with('success', 'Data Berhasil dihapus');
    }
}
