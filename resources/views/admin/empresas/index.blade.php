@extends('layouts.app')

@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/custom_table.css') }}">
@endsection

@section('content')

<style>
    button.dt-button:first-child, div.dt-button:first-child, a.dt-button:first-child, input.dt-button:first-child{
         background-color: #fff;
    }

    button.dt-button.buttons-print:hover{
        background-color: #ffd60a!important;
    }

    button.dt-button, div.dt-button, a.dt-button, input.dt-button{
         background-color: #fff;
    }

    button.dt-button.buttons-collection.buttons-colvis:hover{
        background-color: #ffd60a!important;
    }

    div.dataTables_wrapper div.dataTables_info {
        color: #ccc;
    }

</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="box">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="d-flex justify-content-between p-3">

                                    <a href="javascript:history.back()" class="btn btn-back">
                                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                                    </a >

                                    <h1 class="text-white">Empresa</h1>

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
                                        <th scope="col">Nombre</th>
                                        <th scope="col">RFC</th>
                                        <th scope="col">Entidad</th>
                                      </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @foreach ($empresa as $item)
                                         <tr>
                                            <td>
                                                <a style="text-decoration: none;"
                                                href="{{ route('edit.empresa', $item->id) }}">{{$item->name}}
                                                </a>
                                            </td>
                                            <td>{{$item->rfc}}</td>
                                            <td>{{$item->entidad}}</td>
                                          </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
