<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paslon = Paslon::all();
        $data = [
            'title' => 'Paslon - RCPDES',
            'paslon' => $paslon
        ];

        return view('main.paslon.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Paslon - Add'
        ];

        return view('main.paslon.create',$data);
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
            'no_urut' => 'required|unique:Paslons',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ],[
            'no_urut.required' => 'no urut paslon tidak boleh kosong !!!',
            'no_urut.unique' => 'no urut paslon sudah ada',

            'nama.required' => 'nama paslon tidak boleh kosong',
            'jenis_kelamin.required' => 'jenis kelamin paslon tidak boleh kosong',
            'alamat.required' => 'alamat paslon tidak boleh kosong',
            'kontak.required' => 'kontak tidak boleh kosong',

        ]);
        Paslon::create($validateData);
        return redirect('admin/paslon')->with('status','Data berhasil ditambahkan');
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
        $paslon = Paslon::find($id);
        $data = [
            'title' => 'Edit - Paslon',
            'paslon' => $paslon
        ];

        return view('main.paslon.edit', $data);
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
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ];

        // cari data di database
        $paslon = Paslon::find($id);


        // jika nama tps di database tidak sama dengan yang diinputkan
        if($request->no_urut != $paslon->no_urut ){
            $rules['no_urut'] =  'required|unique:Paslons';
        };
        $validateData = $request->validate($rules,[
            'no_urut.required' => 'nama tps tidak boleh kosong !!!',
            'no_urut.unique' => 'nama sudah ada',


            'nama.required' => 'lokasi tidak boleh kosong !!!',
            'jenis_kelamin.required' => 'lokasi tidak boleh kosong !!!',
            'alamat.required' => 'lokasi tidak boleh kosong !!!',
            'kontak.required' => 'kontak tidak boleh kosong !!!',

        ]);
        Paslon::where('id', $id)->update($validateData);
        return redirect('admin/paslon')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paslon = Paslon::find($id);
        $paslon->delete();
        return redirect('admin/paslon')->with('status', 'Data berhasil dihapus');
    }
}
