<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class konten extends Model
{
    protected $table = 'konten';
    public $incrementing = false;
    protected $primaryKey = 'id_konten';
}
