
<div class="col-12 p-4">
    <table class="table" id="table_id" >
        <thead class="text-white">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Fecha Fin</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
