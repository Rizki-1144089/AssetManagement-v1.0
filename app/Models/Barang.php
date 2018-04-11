<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table='barang';
    protected $guarded =[];
    protected $primaryKey = 'id_barang';

    public function kategori()
    {
    return $this->belongsTo('App\Models\KategoriBarang', 'id_kategori');
    }
    public function lokasi()
    {
    return $this->belongsTo('App\Models\Lokasi', 'id_lokasi');
    }
}