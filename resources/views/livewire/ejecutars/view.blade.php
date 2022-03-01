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

				<div class="col-12 p-4">
				<div class="table-responsive">

					<table class="table display" id="table_id" >
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
								<td width="90">

								<div class="btn-group">

                                      <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                      </button>

									<ul class="dropdown-menu">
                                        <li>
                                            <a data-bs-toggle="modal" data-bs-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                        </li>

                                        <li>
                                            <a class="mt-5" href="{{route('print.ejecutar', $row->id)}}">
                                                Descargar
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" onclick="confirm('Confirm Delete Difusion id {{$row->id}}? \nDeleted Difusions cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                        </li>
									</ul>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>


					</div>
				</div>

</div>
