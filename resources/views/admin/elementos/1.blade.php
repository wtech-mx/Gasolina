@extends('layouts.app')
@section('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')

            <div class="row">
                <div class="col-12 mt-3 mb-5">
                    <div class="d-flex justify-content-between p-3">

                        <a href="javascript:history.back()" class="btn btn-back">
                            <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                        </a >

                        <h5 class="text-white">FORMATO DE REGISTRO</h5>

                        <a class="btn btn-back" href="">
                            <i class="fa fa-bell btn-icon-back"></i>
                        </a>

                    </div>
                </div>

                <table id="usuarios" class="table table-hover text-white">
                    <thead>
                        <tr>
                          <th scope="col">Acciones</th>
                          <th scope="col">ID</th>
                          <th scope="col">Registro</th>
                          <th scope="col">Configurado</th>
                        </tr>
                      </thead>
                      <tbody>
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

            @section('js')
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#usuarios').DataTable();
                    });

                </script>

            @endsection

@endsection
