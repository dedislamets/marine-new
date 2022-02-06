<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    protected $table = 't_kapal';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','vessel_nama','owners','place_build','year_build','builder','keel_laid','launching','port_registry','construction',
'call_sign','clasification','clasification_no','imo','loa','length','breadth','depth','summer_draught','grt','nrt','dwt','deck_area','sideboard','deck_capacity','max_deck_load','email',
    ];
    public $timestamps = false;
}
