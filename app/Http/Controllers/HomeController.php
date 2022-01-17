<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'dptPerempuan' => Dpt::sum('dpt_perempuan'),
            'dptLaki' => Dpt::sum('dpt_laki'),
            'jmlTps' => Tps::count('id'),
            'data' => $dataPie,
            'suara' => $paslon,
            'suaraMasuk' => $suaraMasuk

        ];

        return view('main.dashboard.home',$data);
    }
    
}