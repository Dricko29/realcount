@extends('main.front.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Tps</h4>

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
                    @if ($tpsData->count())
                        
                    <h4 class="card-title">Data TPS</h4>
                    <p></p>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>Tps</th>
                            <th>Lokasi</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($tpsData as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->lokasi }}</td>
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