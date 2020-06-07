<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $table='tb_anggota_poktan';
    protected $primaryKey='id_anggota';
    protected $fillable=['nama_anggota','id_poktan','jk','tempat_lahir','tanggal_lahir','alamat','no_hp'];
}
