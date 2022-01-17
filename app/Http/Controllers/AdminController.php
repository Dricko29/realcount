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

        $data = [
            'title' => 'Admin Panel',
        ];
        return view('main.dashboard.admin',$data);


    }
}
