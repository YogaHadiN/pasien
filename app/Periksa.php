<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    public function transaksi_periksa(){
        return $this->hasMany('App\TransaksiPeriksa');
    }
}
