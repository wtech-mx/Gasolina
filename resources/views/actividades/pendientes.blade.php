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
</style>


<div class="col-12 p-4">
    <table class="table" id="table_id" >
        <thead class="text-white">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Fecha Fin</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($tareas_pendientes as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>
                    @switch($item)
                        @case($item->color == '#549227')
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Diaria <span class="badge" style="background-color: #549227; color:#549227">-</span>
                        </button>
                        @break;

                        @case($item->color == '#004E9A')
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Mensual <span class="badge" style="background-color: #004E9A; color:#004E9A">-</span>
                        </button>
                        @break;

                        @case($item->color == '#4D446F')
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Semestral <span class="badge" style="background-color: #4D446F; color:#4D446F">-</span>
                        </button>
                        @break;

                        @case($item->color == '#632A00')
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Anual <span class="badge" style="background-color: #632A00; color:#632A00">-</span>
                        </button>
                        @break;
                    @endswitch
                </td>
                <td>{{$item->end}}</td>
                <td></td>
            </tr>
            @endforeach

            @foreach ($calendario_pendientes as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>
                    @switch($item)
                        @case($item->color == $config->color_diaria)
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Diaria <span class="badge" style="background-color: {{$config->color_diaria}}; color:{{$config->color_diaria}}">-</span>
                        </button>
                        @break;

                        @case($item->color == $config->color_mensual)
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Mensual <span class="badge" style="background-color: {{$config->color_mensual}}; color:{{$config->color_mensual}}">-</span>
                        </button>
                        @break;

                        @case($item->color == $config->color_semestral)
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Semestral <span class="badge" style="background-color: {{$config->color_semestral}}; color:{{$config->color_semestral}}">-</span>
                        </button>
                        @break;

                        @case($item->color == $config->color_año)
                        <button type="button" class="btn" style="background-color: transparent; border: 1px solid transparent; color:#fff">
                            Anual <span class="badge" style="background-color: {{$config->color_año}}; color:{{$config->color_año}}">-</span>
                        </button>
                        @break;
                    @endswitch
                </td>
                <td>{{$item->end}}</td>
                <td></td>
            </tr>
            @endforeach

            @foreach ($calendario_elemento as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>
                    @switch($item)
                        @case($item->elemento == 'viii-01-03')
                            VIII-01-03 Lista de control de autorizaciones y permisos.
                        @break;
                    @endswitch
                </td>
                <td>{{$item->end}}</td>
                <td>
                    <a data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('index.viii_01_03') }}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                        <i class="fa fa-eye"></i>
                    </a >
                </td>
            </tr>
            @include('actividades.eliminar')
            @endforeach

            @foreach ($xvElemento_pendientes as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->tipo_auditoria}}</td>
                <td>{{$item->end}}</td>
                <td>
                    <a href="{{ route('index.xv_01_01') }}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                        <i class="fa fa-eye"></i>
                    </a >
                </td>
            </tr>
            @endforeach

            @foreach ($xvElementor02_pendientes as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->contratista}}</td>
                <td>{{$item->end}}</td>
                <td>
                    <a href="{{ route('index.xv_01_02') }}" style="color: #ffffff;font-size: 16px;padding: 5px;">
                        <i class="fa fa-eye"></i>
                    </a >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
