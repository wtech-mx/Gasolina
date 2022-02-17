@extends('layouts.app')

@section('content')
@php
   $fecha = date("Y-m-d");
@endphp
<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Formato de Regis</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a class="btn btn-back" href=" {{ route('create.empresa') }}">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                   <table class="table display" id="table_id" >
                        <thead class="text-white">
                            <tr>
                              <th scope="col">Acciones</th>
                              <th scope="col">ID</th>
                              <th scope="col">Registro</th>
                              <th scope="col">Configurado</th>
                            </tr>
                          </thead>
                          <tbody class="text-white">
                            <tr>
                              <th scope="row">
                                <form method="POST" action="{{ route('update.funciones') }}" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" name="start" id="start" value="{{ $fecha }}">
                                    <button class="btn-sinestilo" type="submit">
                                        <i class="fa fa-check-circle-o"></i>
                                    </button>
                                </form>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                </a>

                              </th>
                              <td>6</td>
                              <td>V-01-01 Matriz de responsabilidades.</td>
                              <td>SI</td>
                            </tr>
                          </tbody>
                      </table>
                    @include('admin.elementos.modal')

            </div>

        </div>
</div>

@endsection
