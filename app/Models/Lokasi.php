<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table='lokasi';
    protected $guarded =[];
    protected $primaryKey = 'id_lokasi';

    public function barang()
    {
    return $this->hasMany('App\Models\Barang', 'id_lokasi');
    }
}
