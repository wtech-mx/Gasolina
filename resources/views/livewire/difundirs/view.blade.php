@section('title', __('Difundirs'))
<div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Empresa</h1>

                    {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#createDataModal">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
            </div>

						@include('livewire.difundirs.create')
						@include('livewire.difundirs.update')

				<div class="col-12 p-4">
				    <div class="table-responsive" style="overflow: hidden;">

                        <table class="table display" id="table_id" >
                            <thead class="text-white">
                                <tr>
                                    <td>#</td> 
								<th>Id User</th>
								<th>Id Elemento</th>
								<th>Fecha</th>
								<th>Descripcion</th>
								<th>Tipo</th>
								<th>Inicial</th>
								<th>Final</th>

                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach($difundirs as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> 
								<td>{{ $row->id_user }}</td>
								<td>{{ $row->id_elemento }}</td>
								<td>{{ $row->fecha }}</td>
								<td>{{ $row->descripcion }}</td>
								<td>{{ $row->tipo }}</td>
								<td>{{ $row->inicial }}</td>
								<td>{{ $row->final }}</td>

                                    <td >

                                        <a href="#" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>

                                        <a href="#" style="color: #ffffff;font-size: 16px;padding: 5px">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </a>

                                        <a data-bs-toggle="modal" data-bs-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>

                                        <a class="dropdown-item" onclick="confirm('Confirm Delete Difusion id {{$row->id}}? \nDeleted Difusions cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})" style="color: #ffffff;font-size: 16px;padding: 5px;">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
					</div>
				</div>

</div>
