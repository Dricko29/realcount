<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suara;
use App\Models\Paslon;
use App\Models\Dpt;
use App\Models\Polling;
use App\Models\Tps;

class RekapController extends Controller
{
    public function suara(){

        $suara= Tps::has('polling')->withSum('polling' ,'jumlah_suara')->get()->load(['polling','suara']);

        $data = [
            'title' => 'Rekap',
            'data' => $suara,
        ];
        return view('main.rekap.suara',$data);


    }
    public function tps(){
        $tps = Tps::with('polling','polling.paslon')->withSum('polling','jumlah_suara')->get();
        $data = [
            'title' => 'Rekap',
            'suara' => $tps,
        ];
        return view('main.rekap.tps',$data);
    }
}
