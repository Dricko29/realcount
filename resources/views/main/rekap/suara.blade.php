@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Rekap Data Suara</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        {{-- <li class="breadcrumb-item active">Starter Page</li> --}}
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">  
                    @if ($data->count())
                        <h4 class="card-title">Detail Data suara</h4>
                        <p></p>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Tps</th>
                                <th><center>Jumlah Memilih</center></th>
                                <th><center>Jumlah Suara Tidak Sah</center></th>
                                <th><center>Golput</center></th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                    @foreach ($item->suara as $key)
                                        
                                    <tr>
                                        <td>{{ $item->nama}}</td>
                                        
                                        <td><center>{{ $item->polling_sum_jumlah_suara }}</center></td>
                                        <td><center>{{ $key->suara_tidak_sah }}</center></td>
                                        <td><center>{{ $key->golput }}</center></td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <p class="card-title">Data Tidak ada</p>
                    @endif
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div> 
    </div>
@endsection

