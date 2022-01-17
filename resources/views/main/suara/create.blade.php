@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Suara</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/suara">Suara</a></li>
                        <li class="breadcrumb-item active">Add</li>
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
                            <a href="/suara" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div> 
                    <h4 class="card-title mb-4">Input Data Suara Tidak Sah</h4>
                @if (session('status'))
                        <div class="alert bg-danger alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                    <form class="needs-validation" action="/suara" method="post">
                        @csrf
                            <div class="mb-3">
                                <label for="tps" class="form-label">Tps</label>
                                <select class="form-select " required name="tps_id" id="tps">
                                    <option selected disabled value="">Pilih Tps...</option>
                                    @foreach ($tps as $item)
    
                                        @if (old('tps_id') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endif
                                    
                                    @endforeach
                                </select>
    
                            </div>
    
                            <div class="mb-3">
                                <label for="suara_tidak_sah" class="form-label">Jumlah Suara Tidak sah</label>
                                <input type="number" class="form-control " required id="suara_tidak_sah" name="suara_tidak_sah" placeholder="masukan jumlah suara tidak sah">
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