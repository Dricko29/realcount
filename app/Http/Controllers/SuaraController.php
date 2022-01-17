<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suara;
use App\Models\Tps;
use App\Models\Dpt;
use App\Models\Polling;


class SuaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suara= Suara::with('tps')->get();
        $data = [
            'title' => 'Suara',
            'suara' => $suara
        ];

        return view('main.suara.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tps = Tps::all();
        $data = [
            'title' => 'Add - Polling',
            'tps' => $tps,
        ];
        return view('main.suara.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // jumlah dpt per tps
        if ($request->tps_id != null) {
            # code...
            $dpt= Dpt::where('tps_id',$request->tps_id)->get();
            $totalDpt = $dpt[0]->dpt_perempuan+$dpt[0]->dpt_laki;
    
            // jumlah polling per tps
            $tps = Polling::where('tps_id' , $request->tps_id)->sum('jumlah_suara');
    
            // suara tidak sah per tps;
            $tidakSah = $request->suara_tidak_sah;
            $suaraMasuk = $tps + $tidakSah;
            $golput = $totalDpt - $suaraMasuk;
        }


        $request->validate([
            'tps_id' => 'required|unique:Suaras',
            'suara_tidak_sah' => 'required',
        ],[

            'tps_id.required' => 'nama tps tidak boleh kosong !!!',
            'tps_id.unique' => 'nama sudah ada',
            'suara_tidak_sah.required' => 'lokasi tidak boleh kosong !!!',
        ]);

        Suara::create([
            'tps_id' => $request->tps_id,
            'suara_tidak_sah' => $request->suara_tidak_sah,
            'golput' => $golput
        ]);
        return redirect('admin/suara')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tps = Tps::all();
        $suara = Suara::find($id);
        $data = [
            'title' => 'edit - suara',
            'suara' => $suara,
            'tps' => $tps,
        ];

        return view('main.suara.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // jumlah dpt per tps

        $dpt= Dpt::where('tps_id',$request->tps_id)->get();
        $totalDpt = $dpt[0]->dpt_perempuan+$dpt[0]->dpt_laki;

        // jumlah polling per tps
        $tps = Polling::where('tps_id' , $request->tps_id)->sum('jumlah_suara');

        // suara tidak sah per tps;
        $tidakSah = $request->suara_tidak_sah;
        $suaraMasuk = $tps + $tidakSah;
        $golput = $totalDpt - $suaraMasuk;

        $suara = Suara::find($id);
        $rules=[
            'tps_id.required' => 'nama tps tidak boleh kosong !!!',
            'suara_tidak_sah.required' => 'lokasi tidak boleh kosong !!!',
        ];

        if ($request->tps_id != $suara->tps_id) {
            $rules['tps_id'] ='required|unique:Suaras';
        }
        $request->validate($rules,[

            'tps_id.required' => 'nama tps tidak boleh kosong !!!',
            'tps_id.unique' => 'nama sudah ada',
            'suara_tidak_sah.required' => 'lokasi tidak boleh kosong !!!',
        ]);

        Suara::where('id', $id)->update([
            'tps_id' => $request->tps_id,
            'suara_tidak_sah' => $request->suara_tidak_sah,
            'golput' => $golput
        ]);
        return redirect('admin/suara')->with('status','Data berhasil update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suara = Suara::find($id);
        $suara->delete();

        return redirect('admin/suara')->with('status','Data Berhasil Dihapus');
    }
}
