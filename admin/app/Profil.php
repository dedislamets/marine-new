<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 't_profil';
    protected $primaryKey = 'id';
    protected $fillable = [
        'history', 'visi', 'misi', 'service_desc', 'trading_desc', 'chartering_desc', 'csm_desc', 'transportation_desc'
    ];
    public $timestamps = false;
}
