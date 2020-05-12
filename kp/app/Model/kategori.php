<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    public $incrementing = false;
    protected $primaryKey = 'id_kategori';

    public function Kategori()
    {
        return $this->hasMany('App\Model\barang', 'id_kategori', 'id_kategori');
    }
    public function Subkategori()
    {
        return $this->belongsTo('App\Model\subkategori', 'id_subkategori', 'id_subkategori');
    }
}
