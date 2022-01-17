@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data DPT</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/dpt">Dpt</a></li>
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
                        <div class="col-xl-8">
                            <div class="pb-4">
                                <a href="/admin/dpt" class="btn shadow-sm rounded-circle btn-primary"><i class="fas fa-arrow-left"></i></a>
                            </div>
                            <h4 class="card-title mb-4">Input Data DPT</h4>
                            <form class="needs-validation" action="/admin/dpt" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="tps" class="form-label">TPS</label>
                                    <select class="form-select @error('tps_id') is-invalid @enderror" name="tps_id" id="tps">
                                        <option selected disabled value="">Pilih Tps...</option>
                                        @foreach ($tps as $item)

                                            @if (old('tps_id') == $item->id)
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
                                    <label for="dpt_perempuan" class="form-label">Jumlah DPT Perempuan</label>
                                    <input type="number" class="form-control @error('dpt_perempuan') is-invalid @enderror"  value="{{ old('dpt_perempuan') }}" id="dpt_perempuan" name="dpt_perempuan" placeholder="masukan jumlah dpt perempuan">
                                    @error('dpt_perempuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="dpt_laki" class="form-label">Jumlah DPT Laki-laki</label>
                                    <input type="number" class="form-control @error('dpt_laki') is-invalid @enderror" value="{{ old('dpt_laki') }}" id="dpt_laki" name="dpt_laki" placeholder="masukan jumlah dpt laki-laki">
                                    @error('dpt_laki')
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