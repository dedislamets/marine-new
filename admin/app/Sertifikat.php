<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 't_sertifikat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','clasification_no','kode_sertifikat','dokumen','email','token'
    ];
    public $timestamps = false;
}
