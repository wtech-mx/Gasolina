@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Tareas Pendientes</h1>

                    <a href="">
                        
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <table class="table" id="table_id" >
                    <thead class="text-white">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha Fin</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($tareas as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>
                                @switch($item)
                                    @case($item->color == '#549227')
                                    <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                                        Diaria <span class="badge" style="background-color: #549227; color:#549227">-</span>
                                    </button>
                                    @break;

                                    @case($item->color == '#004E9A')
                                    <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                                        Mensual <span class="badge" style="background-color: #004E9A; color:#004E9A">-</span>
                                    </button>
                                    @break;

                                    @case($item->color == '#4D446F')
                                    <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                                        Semestral <span class="badge" style="background-color: #4D446F; color:#4D446F">-</span>
                                    </button>
                                    @break;

                                    @case($item->color == '#632A00')
                                    <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                                        Anual <span class="badge" style="background-color: #632A00; color:#632A00">-</span>
                                    </button>
                                    @break;
                                @endswitch
                            </td>
                            <td>{{$item->end}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
