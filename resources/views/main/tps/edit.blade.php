@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Tps</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/Tps">Tps</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="pb-4">
                                <a href="/tps" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <h4 class="card-title mb-4">Edit Data TPS</h4>
                            <form class="needs-validation" action="/admin/tps/{{ $tps->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama TPS</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama', $tps->nama)  }}" id="nama" name="nama" placeholder="masukan nama tps">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="lokasi" class="form-label">Lokasi TPS</label>
                                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $tps->lokasi) }}" id="lokasi" name="lokasi" placeholder="masukan lokasi tps">
                                    @error('lokasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>      
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection