<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AntrianPeriksa;
use App\AntrianPoli;
use App\Periksa;

class AntrianController extends Controller
{
	  public function __construct()
    {
		
        $this->middleware('avail')->only('antri');
    }
	public function antri($id){
		$ap                 = AntrianPoli::find($id);
		$totalAntrian       = $this->totalAntrian($ap->tanggal);
		$antrian_pasien_ini = array_search($ap->antrian, $totalAntrian['antrians']) + 1;
		$antrian_saat_ini   = $totalAntrian['antrian_saat_ini'];

		return view('welcome', compact(
			'antrian_pasien_ini',
			'antrian_saat_ini'
		));
	}
	public function fail(){
		return view('unavailable');
	}
	
	
	public function totalAntrian($tanggal){
		$antrians = [];
		$apx_per_tanggal = AntrianPeriksa::where('tanggal',  $tanggal)
										->whereIn('poli', ['umum', 'sks', 'luka'])
										->get();
		$apl_per_tanggal = AntrianPoli::where('tanggal',  $tanggal)
										->whereIn('poli', ['umum', 'sks', 'luka'])
										->get();
		$px_per_tanggal = Periksa::where('tanggal',  $tanggal)
										->whereIn('poli', ['umum', 'sks', 'luka'])
										->orderBy('antrian', 'desc')
										->get();

		foreach ($apx_per_tanggal as $apx) {
			$antrians[$apx->pasien_id] = $apx->antrian;
		}
		foreach ($apl_per_tanggal as $apx) {
			$antrians[$apx->pasien_id] = $apx->antrian;
		}
		foreach ($px_per_tanggal as $apx) {
			$antrians[$apx->pasien_id] = $apx->antrian;
		}
		sort($antrians);
		$antrian_saat_ini   = 1;
		if ( $px_per_tanggal->count() ) {
			$antrian_saat_ini   = array_search($px_per_tanggal->first()->antrian, $antrians);
		}
		
		
		$result = compact(
			'antrians',
			'antrian_saat_ini'
		);

		return $result;
	}
	public function monitor(){
		$antrian = 'A1';

		return view('monitor', compact(
			'antrian'
		));
	}
	public function testpusher(){
		return view('testpusher');
	}
	
}
