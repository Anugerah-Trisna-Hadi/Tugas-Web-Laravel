<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // mengambil data dari table siswa
        $siswa = DB::table('siswa')->get();
 
        // mengirim data siswa ke view data
        return view('data',['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'umur_siswa' => 'required|min:2',
            'alamat' => 'required',
        ]);
        DB::table('siswa')->insert([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'umur_siswa' => $request->umur_siswa,
            'alamat' => $request->alamat
        ]);
        return redirect('/DataSiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data dari table siswa
        $siswa = DB::table('siswa')->find($id);
        // mengirim data siswa ke view data
        return view('edit_data',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'umur_siswa' => 'required|min:2',
            'alamat' => 'required',
        ]);
        $siswa = DB::table('siswa')->where('id', $id)->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'umur_siswa' => $request->umur_siswa,
            'alamat' => $request->alamat
        ]);
        return redirect('DataSiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('siswa')->where('id',$id)->delete();
        return redirect('/DataSiswa');
    }
}
