@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Perolehan Suara</h4>

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
                @if (session('status'))
                        <div class="alert bg-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                @if (session('error'))
                        <div class="alert bg-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                <div class="card-body">  
                    <div class="pb-4">
                        <a href="admin/polling/create" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                    @if ($polling->count())
                        <h4 class="card-title">Data Polling</h4>
                        <p></p>
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Tps</th>
                                <th>Paslon</th>
                                <th style="width: 200px">Jumlah Suara</th>
                                <th style="width: 120px">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($polling as $item)
                                    <tr>
                                        <td>{{ $item->tps->nama }}</td>
                                        <td>{{ $item->paslon->nama }}</td>
                                        <td>{{ $item->jumlah_suara }}</td>

                                        <td> <center>
                                            <a href="/admin/polling/{{ $item->id }}/edit" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                            <form action="/admin/polling/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </center>
                                        </td>
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

