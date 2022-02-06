<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 't_registrasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'email', 'phone', 'pass', 'tanggal_join', 'verified','address','biodata','ktp', 'perusahaan'
    ];
    public $timestamps = false;
}
