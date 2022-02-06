<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','file_name','email','jenis'
    ];
    public $timestamps = false;
}
