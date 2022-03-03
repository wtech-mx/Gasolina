@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Consulta</h1>

                    <a class="btn btn-back" data-bs-toggle="modal" data-bs-target="#excelDataModal">
                        <i class="fa fa-file-excel-o btn-icon-back"></i>
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table display" id="table_id" >
                    <thead class="text-white">
                        <tr>
                            <th>Regla</th>
                            <th>Servicio</th>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach($consulta as $row)
                        <tr>
                            @php
                                $str = $row->regla;
                                $num = strlen($str);
                            @endphp
                            <td>
                            @if ($num >= 70)
                                {{substr($row->regla, 0, -73)  }}...
                            @else
                                {{ $row->regla }}
                            @endif

                            </td>
                            <td>{{ $row->servicio }}</td>
                            <td >

                            <div class="btn-group">
                                <a data-bs-toggle="modal" data-bs-target="#showDataModal-{{$row->id}}" style="color: #ffffff;font-size: 16px;padding: 5px">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                {{-- {{route('print.ejecutar', $row->id)}} --}}
                                <a href="" style="color: #ffffff;font-size: 16px;padding: 5px">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </a>
                            </div>

                            </td>
                        </tr>
                        @include('consulta.show')
                        @endforeach
                    </tbody>
                </table>
                @include('consulta.modalExcel')
            </div>
</div>

@endsection
