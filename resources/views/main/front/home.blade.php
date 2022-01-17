@extends('main.front.layouts.app')

@section('style')
            <style type="text/css">
            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 320px;
                max-width: auto;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

            input[type="number"] {
                min-width: 50px;
            }

        </style>
@endsection

@section('content')
            <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Realcount</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                            <li class="breadcrumb-item active">Horizontal Boxed Width</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Suara Masuk</h4>
                        <div class="text-center">
                            <div class="avatar-sm mx-auto mb-4">
                                <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                                        <i class="bx bx-downvote text-primary"></i>
                                    </span>
                            </div>
                            <p class="font-16 text-muted mb-2"></p>
                            <h1><a href="javascript: void(0);" class="text-dark">{{ $suaraMasuk }} % </a></h1>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Perolehan Suara Paslon</h4>
                        {{-- <div class="text-center">
                            <div class="avatar-sm mx-auto mb-4">
                                <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                                        <i class="mdi mdi-facebook text-primary"></i>
                                    </span>
                            </div>
                            <p class="font-16 text-muted mb-2"></p>
                            <h5><a href="javascript: void(0);" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                        </div> --}}
                        <div class="row mt-4">

                            @foreach ($suara as $item)
                                
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <div class="avatar-xs mx-auto mb-3">
                                        <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                <i class="bx bx-user text-white"></i>
                                            </span>
                                    </div>
                                    <h5 class="font-size-15">{{ $item->nama }}</h5>
                                    <p class="text-muted mb-0">{{ $item->total }} - Suara</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Tps</p>
                                        <h4 class="mb-0">{{ $jmlTps }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-home-circle font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">DPT Perempuan</p>
                                        <h4 class="mb-0">{{ $dptPerempuan }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-female font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">DPT Laki-laki</p>
                                        <h4 class="mb-0">{{ $dptLaki }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-male font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="card">
                    <div class="card-body">
                        <div class="highcharts-figure">
                            <div id="container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
@endsection

@section('script')  
    <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Perolehan Suara'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.2f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [ <?php echo $data ?> ]
            }]
        });

    </script>

@endsection