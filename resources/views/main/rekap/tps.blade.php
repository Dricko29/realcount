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
                    @if ($suara->count())
                        <h4 class="card-title">Detail Data suara</h4>
                        <p></p>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                
                                
                                <tr>
                                    <th><center>Nama</center></th>
                                    @foreach ($suara as $item)
                                        <th><center>{{ $item->nama }}</center></th>
                                    @endforeach
                                        
                                    </tr>
   
                                    
                                    
                            </thead>
                            <tbody>
                                @foreach ($suara as $item)

                                @foreach ($item->polling as $key)
                                <tr>
                                    
                                        <td><center>{{ $key->paslon_id }}</center></td>
                                        
                                        
                                    </tr>
                                    @endforeach
                                    
                                @endforeach
                                @foreach ($suara as $item)

                                <tr>
                                        @foreach ($item->polling as $key)
                                    
                                        <td><center>{{ $key->jumlah_suara }}</center></td>
                                        
                                        
                                        @endforeach
                                </tr>
                                    
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

