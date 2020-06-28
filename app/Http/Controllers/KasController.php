<?php

namespace App\Http\Controllers;

use App\Kas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class KasController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('pengelola')) return $next($request);
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
        $title='Kas';
        $Kas=Kas::paginate(5);
        return view('admin.Kas',compact('title','Kas'));
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
        $Kas=Kas::where('id_kas','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view index
        $title='Kas';
        return view('admin.kas', compact('title','Kas'));
    }

    public function create()
    {
        {
            $title='Input Kas';
            return view('admin.inputkas', compact('title'));
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
            'id_kas'=>'required',
            'id_pengelola'=>'required',
            'tgl'=>'date',
            'uraian'=>'required',
            'debet'=>'required',
            'kredit'=>'required',
            'saldo'=>'required',
        ],$messages);
        Kas::create($validasi);
        return redirect('Kas')->with('success','data berhasil di update');
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
        $title='Edit Kas';
        $Kas=Kas::find($id);
        return view('admin.inputkas', compact('title','Kas'));
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
            'id_kas'=>'required',
            'id_pengelola'=>'required',
            'tgl'=>'date',
            'uraian'=>'required',
            'debet'=>'required',
            'kredit'=>'required',
            'saldo'=>'required',
        ],$messages);
        Kas::whereid_kas($id)->update($validasi);
        return redirect('Kas')->with('success','data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kas::whereid_kas($id)->delete();
        return redirect('Kas')->with('success','data berhasil di Hapus');
    }
}
