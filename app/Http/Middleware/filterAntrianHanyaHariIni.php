<?php

namespace App\Http\Middleware;

use Closure;
use App\Periksa;
use App\AntrianPoli;

class filterAntrianHanyaHariIni
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$id      = $request->id;
		$apl     = AntrianPoli::where('tanggal', $date('Y-m-d'))->where('id', $id)->first();
		$periksa = Periksa::where('tanggal', $tanggal)->where('antrian', $apl->antrian )->first();
		dd(['apl', $apl, 'periksa', $periksa]);
		if(is_null($apl)){
			return redirect('antrianperiksa/fail');
		}
		if (!is_null($periksa)) {
			return redirect('antrianperiksa/fail');
		}
        return $next($request);
    }
}
