<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table='kategori_barang';
    protected $guarded =[];
    protected $primaryKey = 'id_kategori';

    public function barang()
    {
    return $this->hasMany('App\Models\Barang', 'id_kategori');
    }
}
