

<div class="col-12 p-4">
    <table class="table" id="table_id" >
        <thead class="text-white">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha Fin</th>
        </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($tareas_vencer as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->end}}</td>
            </tr>
            @endforeach
            @foreach ($calendario_vencer as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->end}}</td>
            </tr>
            @endforeach

            @foreach ($xvElemento_vencer as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->tipo_auditoria}}</td>
                <td>{{$item->end}}</td>
            </tr>
            @endforeach

            @foreach ($xvElementor02_vencer as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->contratista}}</td>
                <td>{{$item->end}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
