<?php

namespace App\Http\Controllers;

use App\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PengelolaController extends Controller
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
        $title='Pengelola';
        $Pengelola=Pengelola::paginate(5);
        return view('admin.Pengelola',compact('title','Pengelola'));
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
        $Pengelola=Pengelola::where('id_pengelola','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view index
        $title='Pengelola';
        return view('admin.pengelola', compact('title','Pengelola'));
    }

    public function create()
    {
        {
            $title='Input Pengelola';
            return view('admin.inputpengelola', compact('title'));
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
            'id_anggota'=>'required',
        ],$messages);
        Pengelola::create($validasi);
        return redirect('Pengelola')->with('success','data berhasil di update');
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
        $title='Edit Pengelola';
        $Pengelola=Pengelola::find($id);
        return view('admin.inputpengelola', compact('title','Pengelola'));
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
            'id_anggota'=>'required',
        ],$messages);
        Pengelola::whereid_pengelola($id)->update($validasi);
        return redirect('Pengelola')->with('success','data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengelola::whereid_pengelola($id)->delete();
        return redirect('Pengelola')->with('success','data berhasil di Hapus');
    }
}
