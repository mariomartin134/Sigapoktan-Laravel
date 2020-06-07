<?php

namespace App\Http\Controllers;

use App\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AnggotaController extends Controller
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
        $title='Anggota';
        $Anggota=Anggota::paginate(5);
        return view('admin.Anggota',compact('title','Anggota'));
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
        $Anggota=Anggota::where('id_anggota','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view index
        $title='Anggota';
        return view('admin.anggota', compact('title','Anggota'));
    }

    public function create()
    {
        {
            $title='Input Anggota';
            return view('admin.inputanggota', compact('title'));
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
            'id_anggota'=>'required',
            'nama_anggota'=>'required',
            'id_poktan'=>'required',
            'jk'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Anggota::create($validasi);
        return redirect('Anggota')->with('success','data berhasil di update');
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
        $title='Edit Anggota';
        $Anggota=Anggota::find($id);
        return view('admin.inputanggota', compact('title','Anggota'));
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
            'id_anggota'=>'required',
            'nama_anggota'=>'required',
            'id_poktan'=>'required',
            'jk'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Anggota::whereid_anggota($id)->update($validasi);
        return redirect('Anggota')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anggota::whereid_anggota($id)->delete();
        return redirect('Anggota')->with('success','data berhasil di update');
    }
}
