<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PeminjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Peminjaman';
        $peminjaman=Peminjaman::paginate(5);
        return view('admin.peminjaman', compact('title','peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table peminjaman sesuai pencarian data
        $peminjaman=Peminjaman::where('id_pinjam','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view index
        $title='Peminjaman';
        return view('admin.peminjaman', compact('title','peminjaman'));
    }
    
    public function create()
    {
        $title='Input Peminjaman';
        return view('admin.inputPeminjaman', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'kolom :attribute harus lengkap',
            'date'    => 'kolom :attribute harus tanggal',
            'numeric' => 'kolom :attribute harus angka',
        ];
        $validasi = $request->validate([
            'tgl'=>'date',
            'id_pengelola'=>'required',
            'id_anggota'=>'required',
            'jumlah'=>'required',
            'lama'=>'required',
            'bunga'=>'required',
            'keterangan'=>''
        ],$messages);
        Peminjaman::create($validasi);
        return redirect('peminjaman')->with('success','data berhasil di update');
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
        $title='Edit Peminjaman';
        $peminjaman=Peminjaman::find($id);
        return view('admin.inputPeminjaman', compact('title','peminjaman'));
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
        $messages = [
            'required'=> 'kolom :attribute harus lengkap',
            'date'    => 'kolom :attribute harus tanggal',
            'numeric' => 'kolom :attribute harus angka',
        ];
        $validasi = $request->validate([
            'tgl'=>'date',
            'id_pengelola'=>'required',
            'id_anggota'=>'required',
            'jumlah'=>'required',
            'lama'=>'required',
            'bunga'=>'required',
            'keterangan'=>''
        ],$messages);
        Peminjaman::whereid_pinjam($id)->update($validasi);
        return redirect('peminjaman')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::whereid_pinjam($id)->delete();
        return redirect('peminjaman')->with('success','data berhasil di update');
    }
}
