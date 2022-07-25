

<div class="col-12 p-4">
    <table class="table" id="table_id" >
        <thead class="text-white">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha Termino</th>
        </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($tareas_terminadas as $item)
            @php
                $dato = $item->updated_at;
                $fecha = date('d-m-Y',strtotime($dato));
            @endphp
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$fecha}}</td>
            </tr>
            @endforeach
            @foreach ($xElemento_terminadas as $item)
            @php
                $dato = $item->updated_at;
                $fecha = date('d-m-Y',strtotime($dato));
            @endphp
            <tr>
                <td>{{$item->elemento}}</td>
                <td>{{$item->nota}}</td>
                <td>{{$fecha}}</td>
            </tr>
            @endforeach
            @foreach ($calendario_terminadas as $item)
            @php
                $dato = $item->end;
                $fecha = date('d-m-Y',strtotime($dato));
            @endphp
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$fecha}}</td>
            </tr>
            @endforeach

            @foreach ($xvElemento_terminadas as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->tipo_auditoria}}</td>
                <td>{{$item->end}}</td>
            </tr>
            @endforeach

            @foreach ($xvElementor02_terminadas as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->contratista}}</td>
                <td>{{$item->end}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
