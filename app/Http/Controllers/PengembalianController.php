<?php

namespace App\Http\Controllers;

use App\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PengembalianController extends Controller
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
        $title='Pengembalian';
        $pengembalian=Pengembalian::paginate(5);
        return view('admin.pengembalian', compact('title','pengembalian'));
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
        $pengembalian=Pengembalian::where('id_pinjam','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view index
        $title='Pengembalian';
        return view('admin.pengembalian', compact('title','pengembalian'));
    }


    public function create()
    {
        $title='Input Pengembalian';
        return view('admin.inputPengembalian', compact('title'));
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
            'no_invoice'=>'required',
            'id_pinjam'=>'required',
            'id_pengelola'=>'required',
            'pokok'=>'required',
            'bunga'=>'required',
            'lama_bulan'=>'required',
            'biaya_adm'=>'required',
            'tunggakan'=>'required',
            'tgl_bayar'=>'date',
            'wuku'=>'required',
            'jumlah_bayar'=>'required',
            'keterangan'=>''
        ],$messages);
        Pengembalian::create($validasi);
        return redirect('pengembalian')->with('success','data berhasil di update');
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
        $title='Edit Pengembalian';
        $pengembalian=Pengembalian::find($id);
        return view('admin.inputPengembalian', compact('title','pengembalian'));
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
            'no_invoice'=>'required',
            'id_pinjam'=>'required',
            'id_pengelola'=>'required',
            'pokok'=>'required',
            'bunga'=>'required',
            'lama_bulan'=>'required',
            'biaya_adm'=>'required',
            'tunggakan'=>'required',
            'tgl_bayar'=>'date',
            'wuku'=>'required',
            'jumlah_bayar'=>'required',
            'keterangan'=>''
        ],$messages);
        Pengembalian::whereid_kembali($id)->update($validasi);
        return redirect('pengembalian')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengembalian::whereid_kembali($id)->delete();
        return redirect('pengembalian')->with('success','data berhasil di hapus');
    }
}
