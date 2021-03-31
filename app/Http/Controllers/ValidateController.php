<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periksa;

class ValidateController extends Controller
{
    public function antigen($id){

        dd( Periksa::find($id) );
    }
    
}
