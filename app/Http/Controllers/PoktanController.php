<?php

namespace App\Http\Controllers;

use App\Poktan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PoktanController extends Controller
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
        $title='Poktan';
        $Poktan=Poktan::paginate(5);
        return view('admin.Poktan',compact('title','Poktan'));
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
        $Poktan=Poktan::where('id_poktan','like',"%".$cari."%")->paginate(5);
 
        // mengirim data pegawai ke view index
        $title='Poktan';
        return view('admin.poktan', compact('title','Poktan'));
    }

    public function create()
    {
        {
            $title='Input Poktan';
            return view('admin.inputpoktan', compact('title'));
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
            'id_poktan'=>'required',
            'nama_poktan'=>'required',
            'alamat'=>'required',

        ],$messages);
        Poktan::create($validasi);
        return redirect('Poktan')->with('success','data berhasil di update');
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
        $title='Edit Poktan';
        $Poktan=Poktan::find($id);
        return view('admin.inputpoktan', compact('title','Poktan'));
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
            'id_poktan'=>'required',
            'nama_poktan'=>'required',
            'alamat'=>'required',
        ],$messages);
        Poktan::whereid_poktan($id)->update($validasi);
        return redirect('Poktan')->with('success','data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Poktan::whereid_poktan($id)->delete();
        return redirect('Poktan')->with('success','data berhasil di Hapus');
    }
}
