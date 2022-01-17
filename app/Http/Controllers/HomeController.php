<?php

namespace App\Http\Controllers;


use App\Models\Suara;
use App\Models\Paslon;
use App\Models\Dpt;
use App\Models\Polling;
use App\Models\Tps;

class HomeController extends Controller
{
    public function index(){ 

        $dpt = Dpt::sum('dpt_perempuan')+Dpt::sum('dpt_laki');
        $polling = Polling::sum('jumlah_suara');
        $suara = Suara::sum('suara_tidak_sah')+Suara::sum('golput');
        $totalSuara = $polling+$suara;

        $suaraMasuk = round($totalSuara / $dpt * 100,2);

        // pie
        $dataPie = "";
        $paslon = Paslon::withSum('polling as total','jumlah_suara')->get();
        foreach ($paslon as $item) {

            $dataPie.= "{name:'$item->nama',y:$item->total},";

        }

        $data = [
            'title' => 'Home',
            'dptPerempuan' => Dpt::sum('dpt_perempuan'),
            'dptLaki' => Dpt::sum('dpt_laki'),
            'jmlTps' => Tps::count('id'),
            'data' => $dataPie,
            'suara' => $paslon,
            'suaraMasuk' => $suaraMasuk

        ];

        return view('main.front.home',$data);
    }

    public function tps(){
        $tps = Tps::all();
        $data = [
            'title' => 'Tps',
            'tpsData' => $tps
        ];
        return view('main.front.tps',$data);
    }

    public function paslon(){
        $paslon = Paslon::all();
        $data = [
            'title' => 'Paslon - RCPDES',
            'paslon' => $paslon
        ];

        return view('main.front.paslon',$data);
    }

    public function dpt()
    {
        $dpt = Dpt::with('tps')->get();
        $data = [
            'title' => 'DPT - RCPDES',
            'dpt' => $dpt
        ];

        return view('main.front.dpt',$data);
    }
    
}