<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 't_pengajuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_kapal', 'jenis_kapal', 'title_pengajuan', 'jenis_pengajuan', 'id_buyer', 'nama_buyer','id_seller','nama_seller','status', 'tgl_pengajuan','kode_pengajuan', 'email', 'reason'
    ];
    public $timestamps = false;
}
