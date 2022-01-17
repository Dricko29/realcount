@extends('main.front.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Paslon</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                    @if ($paslon->count())
                        
                    
                    <h4 class="card-title">Data Paslon</h4>
                    <p></p>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>No Urut</th>
                            <th>Nama Paslon</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($paslon as $item)
                                <tr>
                                    <td>{{ $item->no_urut}}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->alamat }}</td>
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