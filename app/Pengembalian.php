<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    //
    protected $table='tb_pengembalian_dana_puap';
    protected $primaryKey='id_kembali';
    protected $fillable=['id_pinjam','id_pengelola','pokok','bunga','lama_bulan','biaya_adm','tunggakan','tgl_bayar','wuku','jumlah_bayar','keterangan'];
}
