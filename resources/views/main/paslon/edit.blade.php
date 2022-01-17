@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Paslon</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/paslon">Paslon</a></li>
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
                        <div class="col-xl-12">
                            <div class="pb-4">
                                <a href="/paslon" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <h4 class="card-title mb-4">Edit Paslon</h4>
                            <form class="needs-validation" action="/paslon/{{ $paslon->id }}" method="post">
                                @method('put')
                                @csrf

                                <div class="mb-3">
                                    <label for="no_urut" class="form-label">No urut</label>
                                    <input type="text" class="form-control @error('no_urut') is-invalid @enderror"  value="{{ old('no_urut', $paslon->no_urut) }}" id="no_urut" name="no_urut" placeholder="masukan no urut">
                                    @error('no_urut')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Paslon</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"  value="{{ old('nama', $paslon->nama) }}" id="nama" name="nama" placeholder="masukan nama paslon">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                        <option selected disabled value="">Pilih Jenis Kelamin...</option>
                                            @if (old('jenis_kelamin', $paslon->jenis_kelamin) == 'Laki-laki')
                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            @else
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan" selected>Perempuan</option>
                                            @endif
                                        {{-- <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option> --}}
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="kontak" class="form-label">Kontak</label>
                                    <input type="text" class="form-control @error('kontak') is-invalid @enderror"  value="{{ old('kontak', $paslon->kontak) }}" id="kontak" name="kontak" placeholder="masukan kontak">
                                    @error('kontak')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"  value="{{ old('alamat', $paslon->alamat) }}" id="alamat" name="alamat" placeholder="masukan alamat">
                                    @error('alamat')
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