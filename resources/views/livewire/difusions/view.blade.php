
@section('title', __('Difusions'))

	<div class="row ">

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

             @include('livewire.difusions.create')
             @include('livewire.difusions.update')

             <div class="col-12 p-4">
                    <div class="table-responsive">
                        <table class="table display" id="table_id" >
                            <thead class="text-white">

                                <tr>
                                    <td>#</td>
                                    <th>Descripcion</th>
                                    <th>Externa</th>
                                    <th>Interna</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Final</th>
                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach($difusions as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->descripcion }}</td>
                                    <td>{{ $row->externa }}</td>
                                    <td>{{ $row->interna }}</td>
                                    <td>{{ $row->fecha_inicio }}</td>
                                    <td>{{ $row->fecha_final }}</td>
                                    <td width="90">

                                    <div class="btn-group">
                                      <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                      </button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a data-bs-toggle="modal" data-bs-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})">
                                                     <i class="fa fa-edit"></i> Edit
                                                </a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" onclick="confirm('Confirm Delete Difusion id {{$row->id}}? \nDeleted Difusions cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
                                                    <i class="fa fa-trash"></i>Delete
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

