@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
@endsection
    @section('graficas_js')
    <script src="{{ asset('assets/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/js/highcharts-3d.js') }}"></script>
    @endsection

@section('content')
    <style>
        rect{
        fill: none!important;
        }
        .highcharts-credits{
            fill: #001d3d!important;
        }
        .highcharts-title{
            fill: #ffff!important;
        }

        div.dataTables_wrapper div.dataTables_length label{
            color: #fff;
        }
        div.dataTables_wrapper div.dataTables_info{
            color: #fff;
        }
        div.dataTables_wrapper div.dataTables_filter label{
            color: #fff;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-12 mt-3">
                            <div class="d-flex justify-content-between p-3">

                                <a href="{{ route('home') }}" class="btn btn-back">
                                    <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                </a >

                                <h1 class="text-white">Metas</h1>

                                <a >
                                    {{-- <i class="fa fa-plus btn-icon-back"></i> --}}
                                </a>

                            </div>
                    </div>

                <div class="col-12 d-flex justify-content-center">

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Semestral
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                        Anual
                                    </button>
                                </li>
                                </ul>

                            </div>


                <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                            <div class="col-12">
                                <figure class="highcharts-figure">
                                <div id="container"></div>
                                </figure>
                            </div>
                            @include('admin.graficas.semestral')

                            <table class="table" id="table_id" >
                                <thead class="text-white">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Fecha Fin</th>
                                </tr>
                                </thead>
                                <tbody class="text-white">
                                    @foreach ($T1 as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            @if ($item->check == 1)
                                               <b>Terminada</b>
                                            @else
                                                <b>No terminada</b>
                                            @endif
                                        </td>
                                        <td>{{$item->end}}</td>
                                    </tr>
                                    @endforeach

                                    @foreach ($T2 as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            @if ($item->check == 1)
                                                <b>Terminada</b>
                                            @else
                                                <b>No terminada</b>
                                            @endif
                                        </td>
                                        <td>{{$item->end}}</td>
                                    </tr>
                                    @endforeach

                                    @foreach ($T3 as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            @if ($item->check == 1)
                                               <b>Terminada</b>
                                            @else
                                                <b>No terminada</b>
                                            @endif
                                        </td>
                                        <td>{{$item->end}}</td>
                                    </tr>
                                    @endforeach

                                    @foreach ($T4 as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            @if ($item->check == 1)
                                               <b>Terminada</b>
                                            @else
                                                <b>No terminada</b>
                                            @endif
                                        </td>
                                        <td>{{$item->end}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="col-12">
                                    <figure class="highcharts-figure">
                                    <div id="container2"></div>
                                    </figure>
                                </div>
                                @include('admin.graficas.anual')

                                <table class="table" id="table_id2" >
                                    <thead class="text-white">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col">Fecha Fin</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @foreach ($T1_anual as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                @if ($item->check == 1)
                                                <b>Terminada</b>
                                                @else
                                                    <b>No terminada</b>
                                                @endif
                                            </td>
                                            <td>{{$item->end}}</td>
                                        </tr>
                                        @endforeach

                                        @foreach ($T2_anual as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                @if ($item->check == 1)
                                                <b>Terminada</b>
                                                @else
                                                    <b>No terminada</b>
                                                @endif
                                            </td>
                                            <td>{{$item->end}}</td>
                                        </tr>
                                        @endforeach

                                        @foreach ($T3_anual as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                @if ($item->check == 1)
                                                <b>Terminada</b>
                                                @else
                                                    <b>No terminada</b>
                                                @endif
                                            </td>
                                            <td>{{$item->end}}</td>
                                        </tr>
                                        @endforeach

                                        @foreach ($T4_anual as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                @if ($item->check == 1)
                                                <b>Terminada</b>
                                                @else
                                                    <b>No terminada</b>
                                                @endif
                                            </td>
                                            <td>{{$item->end}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>

                </div>

            </div>
        </div>
    </div>
     @endsection
