<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 't_foto_kapal';
    protected $primaryKey = 'id';
    protected $fillable = [
        'clasification_no', 'nama_foto', 'token', 'main'
    ];
    public $timestamps = false;
}
