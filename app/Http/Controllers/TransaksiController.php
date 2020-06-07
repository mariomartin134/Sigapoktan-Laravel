<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TransaksiController extends Controller
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
        $title='Transaksi';
        $Transaksi=Transaksi::paginate(5);
        return view('admin.transaksi',compact('title','Transaksi'));
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
        $Transaksi=Transaksi::where('id_transaksi','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view 
        $title='Transaksi';
        return view('admin.transaksi', compact('title','Transaksi'));
    }
    
    public function create()
    {
        {
            $title='Input Transaksi';
            return view('admin.inputtransaksi', compact('title'));
        }
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
            'id_pengelola'=>'required',
            'tgl'=>'date',
            'debet'=>'required',
            'kredit'=>'required',
            'prihal'=>'required',
        ],$messages);
        Transaksi::create($validasi);
        return redirect('transaksi')->with('success','data berhasil di update');
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
        $title='Edit Transaksi';
        $Transaksi=Transaksi::find($id);
        return view('admin.inputtransaksi', compact('title','Transaksi'));
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
            'id_pengelola'=>'required',
            'tgl'=>'date',
            'debet'=>'required',
            'kredit'=>'required',
            'prihal'=>'required',
        ],$messages);
        Transaksi::whereid_transaksi($id)->update($validasi);
        return redirect('transaksi')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::whereid_transaksi($id)->delete();
        return redirect('transaksi')->with('success','data berhasil di update');
    }
}
