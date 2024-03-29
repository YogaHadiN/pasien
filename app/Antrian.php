<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Antrian extends Model
{
	public function jenis_antrian(){
		return $this->belongsTo('App\JenisAntrian');
	}

	public function whatsapp_registration(){
		return $this->belongsTo('App\WhatsappRegistration');
	}

	public function antriable(){
		return $this->morphto()->withDefault();
	}

	public function getNomorAntrianAttribute(){
		return $this->jenis_antrian->prefix . $this->nomor;
	}
	public function getJenisAntrianIdAttribute($value){
		if ( is_null($value) ) {
			return '6';
		}
		return $value;
	}

	/**
	 * Prepare a date for array / JSON serialization.
	 *
	 * @param  \DateTimeInterface  $date
	 * @return string
	 */
	protected function serializeDate(DateTimeInterface $date)
	{
		return $date->format('Y-m-d H:i:s');
	}
}
