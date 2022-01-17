@extends('main.front.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data DPT</h4>

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
                    @if ($dpt->count())
                        
                    
                    <h4 class="card-title">Data DPT</h4>
                    <p></p>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>Tps</th>
                            <th>Jumlah DPT Perempuan</th>
                            <th>Jumlah DPT Laki-laki</th>
                            <th>Total DPT</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($dpt as $item)
                                <tr>
                                    <td>{{ $item->tps->nama }}</td>
                                    <td>{{ $item->dpt_perempuan }}</td>
                                    <td>{{ $item->dpt_laki }}</td>
                                    <td>{{ $item->dpt_perempuan+ $item->dpt_laki }}</td>
                                </tr>
                                
                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <h4 class="card-title">Data Tidak Ada</h4>
                    @endif
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection