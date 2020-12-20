<?php

namespace App\Http\Controllers;

use App\Models\Rnc;
use Illuminate\Http\Request;

class RNCController extends Controller
{
    public function index(){
        $pagesPerRequest = 50;
        $rnc = Rnc::paginate($pagesPerRequest);
        return response()->json($rnc, 200);
    }

    public function show($busqueda){
        $rnc = Rnc::BusquedaRnc($busqueda)->get();
        if(count($rnc) <=0){
            return response()->json([
                'type of error' => '404',
                'message'=>'RNC INVALIDO'], 404);
        }
        return response()->json($rnc, 200);
    }
}
