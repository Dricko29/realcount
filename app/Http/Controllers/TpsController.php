<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tps;

class TpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tps = Tps::all();
        $data = [
            'title' => 'Tps - RCPDES',
            'tpsData' => $tps
        ];
        return view('main.tps.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tps - Create'
        ];
        return view('main.tps.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =$request->validate([
            'nama' => 'required|unique:Tps',
            'lokasi' => 'required',
        ],[
            'nama.required' => 'nama tps tidak boleh kosong !!!',
            'nama.unique' => 'nama sudah ada',
            'lokasi.required' => 'lokasi tidak boleh kosong !!!',
        ]);
        Tps::create($validateData);
        return redirect('admin/tps')->with('status','Data berhasil ditambahkan');
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
        $tps = Tps::find($id);

        $data = [
            'title' => 'Edit - Tps',
            'tps' => $tps
        ];
        return view('main.tps.edit',$data);
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
            'lokasi' => 'required',
        ];

        // cari data di database
        $tps = Tps::find($id);

        // jika nama tps di database tidak sama dengan yang diinputkan
        if($request->nama != $tps->nama ){
            $rules['nama'] =  'required|unique:Tps|max:255|min:5';
        };
        $validateData = $request->validate($rules,[
            'nama.required' => 'nama tps tidak boleh kosong !!!',
            'nama.unique' => 'nama sudah ada',
            'nama.min' => 'minimal panjang nama lima karakter !!!',
            'lokasi.required' => 'lokasi tidak boleh kosong !!!',
        ]);
        Tps::where('id', $id)->update($validateData);
        return redirect('admin/tps')->with('status','Data berhasil ditambahkan');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tps = Tps::find($id);
        $tps->delete();

        return redirect('admin/tps')->with('status','Data Berhasil Dihapus');
    }
}
