<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    //
    protected $table='tb_kas_dana_puap';
    protected $primaryKey='id_kas';
    protected $fillable=['id_pengelola','tgl','uraian','debet','kredit','saldo'];
}
