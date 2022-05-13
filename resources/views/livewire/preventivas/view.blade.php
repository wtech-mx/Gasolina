@section('title', __('Preventivas'))

<div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white tittle-firm">Accion Correctiva</h1>

                    {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a type="button" class="btn btn-back" data-bs-toggle="modal" data-bs-target="#createDataModal">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
            </div>

            @include('livewire.preventivas.create')
            @include('livewire.preventivas.update')

    <style>
        .dropdown-item:focus, .dropdown-item:hover{
            background: transparent;
        }
    </style>

				<div class="col-12">
				    <div class="table-responsive" style="overflow: hidden;">

                        <table class="table display" id="table_id" >
                            <thead class="text-white">
                                <tr>
                                    <td>#</td>
								<th>Descripcion</th>
								<th>Estatus</th>
								<th>Fecha</th>

                                    <td>ACTIONS</td>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @foreach($preventivas as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
								<td>{{ $row->descripcion }}</td>
								<td>{{ $row->estatus }}</td>
								<td>{{ $row->fecha }}</td>

                                    <td style="display: flex;">
                                        <a href="#" class="icon_action_correcttive " >
                                            <i class="fa fa-download donwload" aria-hidden="true"></i>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#updateModal" class="dropdown-item icon_action_correcttive edit" wire:click="edit({{$row->id}})" >
                                            <i class="fa fa-eye edit" aria-hidden="true"></i>
                                        </a>
                                        <a class="dropdown-item icon_action_correcttive" onclick="confirm('Confirm Delete Difusion id {{$row->id}}? \nDeleted Difusions cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})" >
                                            <i class="fa fa-trash delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
					</div>
				</div>

</div>
