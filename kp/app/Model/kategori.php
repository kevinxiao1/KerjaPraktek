<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    
    protected $primaryKey = 'id_kategori';

    public function Kategori()
    {
        return $this->hasMany('App\Model\kategori', 'id_kategori', 'id_kategori');
    }
}
