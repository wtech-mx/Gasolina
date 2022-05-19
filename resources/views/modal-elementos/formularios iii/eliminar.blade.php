<div class="modal fade" id="modal{{$row->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="elemento1" aria-hidden="true">

    <form method="POST" action="{{route('destroy.ejecutar_iii-01-01',$row->id)}}">
        {{csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">

        <div class="modal-dialog  modal-sm modal-dialog-centered" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-center p-2">¿Desea eliminar el Registro? </h3>
                            <p class="text-center">Una vez eliminado no se puede recuperar</p>

                            <div class="modal-footer">
                                    <input type="submit" class="btn btn-danger text-white" value="Si">
{{--                                    <button class="deleteRecord">Click me</button>--}}

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
