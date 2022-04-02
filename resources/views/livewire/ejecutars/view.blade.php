@section('title', __('Ejecutars'))
<div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                        <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#createDataModal">
                            <i class="fa fa-plus btn-icon-back"></i>
                        </a>

                </div>
            </div>

						@include('livewire.ejecutars.create')
						@include('livewire.ejecutars.update')

				<div class="col-12 mt-4">
				    <div class="table-responsive" style="overflow: hidden;">

                        <table class="table display" id="table_id">
                            <thead class="text-white">
                                <tr>
                                    <th>Operador</th>
                                    <th>Recibido</th>
                                    <th>Salida</th>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach($ejecutars as $row)
                                <tr>
                                    <td>{{ $row->operador }}</td>
                                    <td>{{ $row->recibido }}</td>
                                    <td>{{ $row->salida }}</td>
                                    <td >

                                    <div class="btn-group">
                                        <a href="" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>

                                        <a href="{{route('print.ejecutar', $row->id)}}" style="color: #ffffff;font-size: 16px;padding: 5px">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

					</div>
				</div>

</div>
