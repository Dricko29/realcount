<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polling;
use App\Models\Tps;
use App\Models\Paslon;

class PollingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $polling= Polling::with('tps','paslon')->get();
        $data = [
            'title' => 'Polling',
            'polling' => $polling
        ];

        return view('main.polling.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tps = Tps::all();
        $paslon = Paslon::all();
        $data = [
            'title' => 'Add - Polling',
            'tps' => $tps,
            'paslon' => $paslon
        ];
        return view('main.polling.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'kode_polling' => 'unique:pollings',
            'tps_id' => 'required',
            'paslon_id' => 'required',
            'jumlah_suara' => 'required',
        ],[
            'kode_polling.unique' => 'data ganda !!!',
            'jumlah_suara.required' => 'lokasi tidak boleh kosong !!!',
            'tps_id.required' => 'lokasi tidak boleh kosong !!!',
            'paslon_id.required' => 'lokasi tidak boleh kosong !!!',
        ]);

        Polling::create($validatedData);
        return redirect('admin/polling')->with('status','Data berhasil ditambahkan');
        


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

        $paslon = Paslon::all();
        $tps = Tps::all();
        $polling = Polling::find($id);
        $data = [
            'title' => 'edit - Polling',
            'polling' => $polling,
            'paslon' => $paslon,
            'tps' => $tps,
        ];

        return view('main.polling.edit', $data);
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

        // set rules
        $rules =[
            'tps_id' => 'required',
            'paslon_id' => 'required',
            'jumlah_suara' => 'required',
        ];

        // cari data di database
        $polling = Polling::find($id);

        // jika nama tps di database tidak sama dengan yang diinputkan
        if($request->kode_polling != $polling->kode_polling ){
            $rules = [
                'kode_polling' => 'unique:pollings',
            ];

        };
        $validateData = $request->validate($rules,[
            'kode_polling.unique' => 'data ganda !!!',
            'jumlah_suara.required' => 'lokasi tidak boleh kosong !!!',
            'tps_id.required' => 'lokasi tidak boleh kosong !!!',
            'paslon_id.required' => 'lokasi tidak boleh kosong !!!',
        ]);
        Polling::where('id', $id)->update($validateData);
        return redirect('admin/polling')->with('status','Data berhasil ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $polling = Polling::find($id);
        $polling->delete();

        return redirect('admin/polling')->with('status','Data Berhasil Dihapus');
    }
}
