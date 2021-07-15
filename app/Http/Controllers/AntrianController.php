<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AntrianPeriksa;
use App\AntrianPoli;
use App\Periksa;
use Input;

class AntrianController extends Controller
{
	  public function __construct()
    {
        $this->middleware('avail')->only('antri');
    }
	  public function index(){
	  	return 'oke';
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
	public function convertSoundToArray(){
		$nomor_antrian = Input::get('nomor_antrian');
		$ruangan       = Input::get('ruangan');
		$huruf         = strtolower(str_split($nomor_antrian)[0]);
		$angka         = substr($nomor_antrian, 1);

		$result = [];
		$result[] =	'nomorantrian.mp3';
		if ( (int)$angka < 12 || $angka == '100' ) {
			$result[] = $huruf . '.mp3';
			$result[] = (int) $angka . '.mp3';
		} else if ( (int) $angka % 100 == 0 ) {
			$angka    = str_split($angka)[0];
			$result[] = (int) $angka . '.mp3';
			$result[] = 'ratus.mp3';
		} else if ( (int)$angka < 20  ) {
			$angka    = substr($angka, 1);
			$result[] = $huruf . '.mp3';
			$result[] = (int) $angka . '.mp3';
			$result[] = 'belas.mp3';
		} else if ( (int)$angka < 100  ) {
			$angka = str_split($angka, 1);
			if ($angka[1] != '0') {
				$result[] = $huruf . '.mp3';
				$result[] = (int) $angka[0] . '.mp3';
				$result[] = 'puluh.mp3';
				$result[] = (int) $angka[1] . '.mp3';
			} else {
				$result[] =	$huruf . '.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] =	'puluh.mp3';
			}
		} else if ( (int)$angka < 112  ) {
			$angka    = substr($angka, 1);
			$result[] = $huruf . '.mp3';
			$result[] = '100.mp3';
			$result[] = (int) $angka . '.mp3';
		} else if ( (int)$angka < 120  ) {
			$angka = substr($angka, 1);
			$angka = str_split($angka);
			$result[] =$huruf . '.mp3';
			$result[] ='100.mp3';
			$result[] =(int) $angka[1] . '.mp3';
			$result[] ='belas.mp3';
		} else if ( (int)$angka < 200  ) {
			$angka = substr($angka, 1);
			$angka = str_split($angka);
			if($angka[1] != '0'){
				$result[] =	$huruf . '.mp3';
				$result[] =	'100.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] ='puluh.mp3';
				$result[] =	(int) $angka[1] . '.mp3';
			} else {
				$result[] =	$huruf . '.mp3';
				$result[] =	'100.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] =	'puluh.mp3';
			}
		} else if( (int)$angka < 999  ) {
			$angka = str_split($angka);
			if(
				$angka[1] == '0' ||
				$angka[1] == '1'  &&  (int)$angka[2] < 2 
			){
				$result[] =	$huruf . '.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] =	'ratus.mp3';
				$result[] =	(int) ($angka[1] . $angka[2]) . '.mp3';
			} else if(
				(int)$angka[1] > 0 &&
				$angka[2] == '0'
			) {
				$result[] =	$huruf . '.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] =	'ratus.mp3';
				$result[] =	(int) $angka[1] . '.mp3';
				$result[] =	'puluh.mp3';
			} else if(
			   	$angka[1] == '1'
			) {
				$result[] =	$huruf . '.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] =	'ratus.mp3';
				$result[] =	(int) $angka[2] . '.mp3';
				$result[] =	'belas.mp3';
			} else {
				$result[] =	$huruf . '.mp3';
				$result[] =	(int) $angka[0] . '.mp3';
				$result[] =	'ratus.mp3';
				$result[] =	(int) $angka[1] . '.mp3';
				$result[] =	'puluh.mp3';
				$result[] =	(int) $angka[2] . '.mp3';
			}
		}
		$result[] =	'silahkanmenuju.mp3';
		$result[] = $ruangan . '.mp3';
		return $result;
	
	}
}
