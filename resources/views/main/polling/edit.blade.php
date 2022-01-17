@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Perolehan Suara</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/polling">Polling</a></li>
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
                            <a href="/admin/polling" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div> 
                    <h4 class="card-title mb-4">Edit Data Polling</h4>
                @if (session('status'))
                        <div class="alert bg-danger alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                    <form class="needs-validation" action="/admin/polling/{{ $polling->id }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <input type="hidden" id="kode_polling" class="form-control @error('kode_polling') is-invalid @enderror"  value="{{ $polling->kode_polling }}"  name="kode_polling">
                            @error('kode_polling')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        
                        </div>
                        <div class="mb-3">
                            <label for="tps" class="form-label">Tps</label>
                            <select class="form-select @error('tps_id') is-invalid @enderror" name="tps_id" id="tps">
                                <option selected disabled value="">Pilih Tps...</option>
                                @foreach ($tps as $item)

                                    @if (old('tps_id', $polling->tps_id) == $item->id)
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
                            <label for="paslon" class="form-label">Paslon</label>
                            <select class="form-select @error('paslon_id') is-invalid @enderror" name="paslon_id" id="paslon">
                                <option selected disabled value="">Pilih Paslon...</option>
                                @foreach ($paslon as $item)

                                    @if (old('paslon_id',$polling->paslon_id) == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                
                                @endforeach
                            </select>
                            @error('paslon_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="jumlah_suara" class="form-label">Jumlah Suara</label>
                            <input type="number" class="form-control @error('jumlah_suara') is-invalid @enderror"  value="{{ old('jumlah_suara',$polling->jumlah_suara) }}" id="jumlah_suara" name="jumlah_suara" placeholder="masukan jumlah dpt perempuan">
                            @error('jumlah_suara')
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
        document.getElementById("kode_polling").value = "T"+x +"P"+y;
        }
    </script>
@endsection