<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poktan extends Model
{
    //
    protected $table='tb_poktan';
    protected $primaryKey='id_poktan';
    protected $fillable=['nama_poktan','alamat'];
}
