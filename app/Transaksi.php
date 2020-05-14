<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table='tb_transaksi';
    protected $primaryKey='id_transaksi';
    protected $fillable=['id_pengelola','tgl','debet','kredit','prihal'];
}
