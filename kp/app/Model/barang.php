<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    
    protected $primaryKey = 'id_barang';
    public $incrementing = false;
    public function Kategori()
    {
        return $this->belongsTo('App\Model\kategori', 'id_kategori', 'id_kategori');
    }
    public function Subkategori()
    {
        return $this->belongsTo('App\Model\subkategori', 'id_subkategori', 'id_subkategori');
    }
}
