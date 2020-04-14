<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class subkategori extends Model
{
    protected $table = 'subkategori';
    public $incrementing = false;
    protected $primaryKey = 'id_subkategori';

    public function Subkategori()
    {
        return $this->hasMany('App\Model\subkategori', 'id_subkategori', 'id_subkategori');
    }
}
