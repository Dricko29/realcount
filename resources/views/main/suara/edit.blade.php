@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Suara</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item"><a href="admin/suara">Suara</a></li>
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
                        <div class="pb-4">
                            <a href="admin/suara" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div> 
                    <h4 class="card-title mb-4">Edit Data Suara</h4>
                @if (session('status'))
                        <div class="alert bg-danger alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                    <form class="needs-validation" action="admin/suara/{{ $suara->id }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="tps" class="form-label">Tps</label>
                            <select class="form-select @error('tps_id') is-invalid @enderror" name="tps_id" id="tps">
                                <option selected disabled value="">Pilih Tps...</option>
                                @foreach ($tps as $item)

                                    @if (old('tps_id', $suara->tps_id) == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                
                                @endforeach
                            </select>
                            @error('tps_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="suara_tidak_sah" class="form-label">Jumlah Suara Tidak Sah</label>
                            <input type="number" class="form-control @error('suara_tidak_sah') is-invalid @enderror"  value="{{ old('suara_tidak_sah',$suara->suara_tidak_sah) }}" id="suara_tidak_sah" name="suara_tidak_sah" placeholder="masukan suara tidak sah">
                            @error('suara_tidak_sah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" onclick="myFunction()" class="btn btn-primary w-md">Simpan</button>
                        </div>
                    </form>


                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>


                
@endsection

@section('script')
    <script>
        function myFunction() {
        var x = document.getElementById("tps").value;
        var y = document.getElementById("paslon").value;
        document.getElementById("kode_suara").value = "T"+x +"P"+y;
        }
    </script>
@endsection