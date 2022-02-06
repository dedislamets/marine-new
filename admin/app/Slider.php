<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 't_slider';
    protected $primaryKey = 'id';
    protected $fillable = [
        'img_slider', 'url'
    ];
    public $timestamps = false;
}
