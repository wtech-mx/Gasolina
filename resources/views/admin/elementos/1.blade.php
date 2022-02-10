@extends('layouts.app')

@section('content')

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
                              <th scope="row"><i class="fa-solid fa-circle-check"></i> <i class="fa-solid fa-file-lines"></i></th>
                              <td>1</td>
                              <td>Otto</td>
                              <td>no</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa-solid fa-circle-check"></i> <i class="fa-solid fa-file-lines"></i></th>
                              <td>2</td>
                              <td>Thornton</td>
                              <td>si</td>
                            </tr>
                          </tbody>
                      </table>
            </div>

        </div>
</div>

@endsection
