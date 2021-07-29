<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianFarmasi extends Model
{
    public function periksa(){
        return $this->belongsTo('App\Periksa');
    }
	public function antrian(){
        return $this->morphOne('App\Antrian', 'antriable');
	}
}
