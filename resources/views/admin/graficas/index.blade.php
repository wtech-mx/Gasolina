@extends('layouts.app')

    @section('graficas_js')
    <script src="{{ asset('assets/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/js/highcharts-3d.js') }}"></script>
    @endsection

@section('content')

    <div class="row">

        <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Metas</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a class="btn btn-back" href=" {{ route('create.empresa') }}">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
        </div>

        <div class="col-12">
          <figure class="highcharts-figure">
            <div id="container"></div>
          </figure>
        </div>



        <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45,
                        beta: 0
                    }
                },
                title: {
                    text: 'Browser market shares at a specific website, 2014'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: [
                        ['Firefox', 45.0],
                        ['IE', 26.8],
                        {
                            name: 'Chrome',
                            y: 12.8,
                            sliced: true,
                            selected: true
                        },
                        ['Safari', 8.5],
                        ['Opera', 6.2],
                        ['Others', 0.7]
                    ]
                }]
            });
		</script>

       <div class="col-12 d-flex justify-content-center">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Actividades
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Preventivo
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            Correctivo
                        </button>
                      </li>
                    </ul>

                 </div>


       <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="form-group mb-3 position-relative text-center">
                                <i class="fa fa-calendar icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Desde*</label>
                                <input type="date" class="form-control input-style">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mb-3 position-relative text-center">
                                <i class="fa fa-calendar icon-style-2"></i>
                                <label class="form-label label-custom-yellow">Hasta*</label>
                                <input type="date" class="form-control input-style">
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn-sinestilo mt-5" type="submit">
                                <div class="button" >
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

              </div>

              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

              </div>

              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

              </div>

     </div>

@endsection
