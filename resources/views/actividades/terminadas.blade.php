@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Tareas Terminadas</h1>

                    <a href="">

                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha Termino</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($tareas as $item)
                        @php
                            $dato = $item->updated_at;
                            $fecha = date('d-m-Y',strtotime($dato));
                        @endphp
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$fecha}}</td>
                        </tr>
                        @endforeach
                        @foreach ($xElemento as $item)
                        @php
                            $dato = $item->updated_at;
                            $fecha = date('d-m-Y',strtotime($dato));
                        @endphp
                        <tr>
                            <td>{{$item->elemento}}</td>
                            <td>{{$item->nota}}</td>
                            <td>{{$fecha}}</td>
                        </tr>
                        @endforeach
                        @foreach ($preventivas as $item)
                        @php
                            $dato = $item->updated_at;
                            $fecha = date('d-m-Y',strtotime($dato));
                        @endphp
                        <tr>
                            <td>{{$item->elemento}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$fecha}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
