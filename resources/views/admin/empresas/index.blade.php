@extends('layouts.app')

@section('content')

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

@endsection
