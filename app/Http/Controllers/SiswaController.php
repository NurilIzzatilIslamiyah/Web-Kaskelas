<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get siswa
        $siswa = Siswa::latest()->paginate(5);

        //render view with siswa
        return view('siswa.index', compact('siswa'));
    }


    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request, Siswa $siswa)
    {
        //validate form
         $this->validate($request, [
             'nama'     => 'required',
             'kelas'     => 'required',
    ]);


        $siswa->create([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
        ]);

        // dd($Murid);

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

     /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Siswa $siswa)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'     => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ];

        $siswa->update([
        'nama'=>$request->input('nama'),
        'kelas'=>$request->input('kelas'),

        ]);

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
