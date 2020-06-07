<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table='tb_peminjaman_dana_puap';
    protected $primaryKey='id_pinjam';
    protected $fillable=['tgl','id_pengelola','id_anggota','jumlah','lama','bunga','keterangan'];
}
