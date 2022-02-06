<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = 't_iklan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'description', 'date_iklan', 'status', 'clasification_no', 'service','type','type_charter','price_charter', 'duration','duration_uom', 'area', 'price_freight', 'portloading', 'portdischarge', 'qty_freight', 'price_csm', 'duration_csm', 'area_csm', 'duration_csm_uom', 'country', 'address_from', 'address_to', 'fee', 'latitude', 'longitude', 'token', 'email', 'price', 'reason','type_comodity', 'dest_comodity', 'qty_comodity'
    ];
    public $timestamps = false;
}
