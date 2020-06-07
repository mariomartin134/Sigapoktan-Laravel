<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    //
    protected $table='tb_pengelola_dana_puap';
    protected $primaryKey='id_pengelola';
    protected $fillable=['id_anggota'];
}
