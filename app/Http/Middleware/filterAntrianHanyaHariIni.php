<?php

namespace App\Http\Middleware;

use Closure;
use App\AntrianPeriksa;

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

		$id = $request->id;
		/* dd('df'); */
		try {
			$ap = AntrianPeriksa::findOrFail($id);
			/* dd($id); */
			if ( $ap->tanggal != date('Y-m-d') ) {
				return $this->redirectFail();
			}
		} catch (\Exception $e) {
			return $this->redirectFail();
		}
        return $next($request);
    }

	public function redirectFail(){
		/* return redirect('antrianperiksa/fail'); */
	}
	
}
