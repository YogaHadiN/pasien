<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianKasir extends Model
{
    public function periksa(){
        return $this->belongsTo('App\Periksa');
    }
	public function antrian(){
        return $this->morphOne('App\Antrian', 'antriable');
	}
    public function antars(){
        return $this->morphMany('App\PengantarPasien', 'antarable');
    }
}
