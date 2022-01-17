<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suara;
use App\Models\Paslon;
use App\Models\Dpt;
use App\Models\Polling;
use App\Models\Tps;

class AdminController extends Controller
{
    public function index(){

        // $data = Tps::has('polling')->withSum('polling' ,'jumlah_suara')->get()->load(['polling']);
        // // return $data;
        // foreach($data as $item){

        //     echo "<li>$item->nama :$item->polling_sum_jumlah_suara</li>";

        // };

        $data = [
            'title' => 'Admin Panel',
        ];
        return view('main.dashboard.admin',$data);


    }
}
