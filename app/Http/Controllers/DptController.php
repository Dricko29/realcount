<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tps;
use App\Models\dpt;

class DptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dpt = Dpt::with('tps')->get();
        $data = [
            'title' => 'DPT - RCPDES',
            'dpt' => $dpt
        ];

        return view('main.dpt.index',$data);
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
            'title' => 'DPT - ADD',
            'tps' => $tps
        ];

        return view('main.dpt.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tps_id' => 'required|unique:Dpts',
            'dpt_perempuan' => 'required',
            'dpt_laki' => 'required',
        ],[

            'tps_id.required' => 'tps tidak boleh kosong !!!',
            'tps_id.unique' => 'tps sudah ada !!!',
            'dpt_perempuan.required' => 'jumlah dpt perempuan tidak boleh kosong !!!',
            'dpt_laki.required' => 'jumlah dpt laki-laki tidak boleh kosong !!!',

        ]);
        Dpt::create([
            'tps_id' => $request->tps_id,
            'dpt_perempuan' => $request->dpt_perempuan,
            'dpt_laki' => $request->dpt_laki,
            'total_dpt' => $request->dpt_perempuan + $request->dpt_laki

        ]);
        return redirect('dpt')->with('status','Data berhasil ditambahkan');
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
        
        $dpt = Dpt::find($id);
        $data = [
            'title' => 'Edit - DPT',
            'tps' => Tps::all(),
            'dpt' => $dpt
        ];
        return view('main.dpt.edit',$data);
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

        $rules = [
            'dpt_perempuan' => 'required',
            'dpt_laki' => 'required',
            
        ];
        // return $rules;

        $dpt = Dpt::find($id);

        if($request->tps_id != $dpt->tps_id ){

                $rules['tps_id'] = 'required|unique:Dpts';
                
        };

        $validateData = $request->validate($rules,
        [
            'tps_id.unique' => 'tps sudah ada !!!',
            'tps_id.require' => 'tps tidak boleh kosong !!!',
            'dpt_perempuan.required' => 'jumlah dpt perempuan tidak boleh kosong !!!',
            'dpt_laki.required' => 'jumlah dpt laki-laki tidak boleh kosong !!!',
        ],

        );


        Dpt::where('id',$id)->update($validateData);
        return redirect('dpt')->with('status','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dpt = Dpt::find($id);
        $dpt->delete();
        return redirect('dpt')->with('status','Data Berhasil Dihapus');
    }
}
