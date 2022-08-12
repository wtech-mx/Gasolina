<!-- Modal -->
<div class="modal fade " id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario {{$item->id}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('update.usuario', $item->id) }}" enctype="multipart/form-data"
                    role="form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item">
                            <a type="button" class="nav-link active" id="pills-info-tab{{$item->id}}" data-bs-toggle="pill" data-bs-target="#pills-info{{$item->id}}" role="tab" aria-controls="pills-info{{$item->id}}" aria-selected="true">Info General</a>
                            </li>

                            <li class="nav-item">
                            <a type="button" class="nav-link" id="pills-trabajador-tab{{$item->id}}" data-bs-toggle="pill" href="#pills-trabajador{{$item->id}}" role="tab" aria-controls="pills-trabajador{{$item->id}}" aria-selected="false">D. Trabajador</a>
                            </li>

                            <li class="nav-item">
                                <a type="button" class="nav-link" id="nom-tab{{$item->id}}" data-bs-toggle="pill" href="#nom{{$item->id}}" role="tab" aria-controls="nom{{$item->id}}" aria-selected="false">Nom 035</a>
                            </li>
                        </ul>
                    </div>
                    {{-- tab datos de infos --}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pills-info{{$item->id}}" role="tabpanel" aria-labelledby="pills-info-tab{{$item->id}}">
                            <label for="">Información General</label>
                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-user icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Nombre</label>
                                            <input type="text" class="form-control input-style" id="name" name="name" placeholder="Nombre" value="{{$item->name}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-font icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Apellido</label>
                                            <input type="text" class="form-control input-style" id="apellido" name="apellido" placeholder="Apellido" value="{{$item->apellido}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-envelope icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Correo</label>
                                            <input class="form-control input-style"  id="email" name="email" type="text" placeholder="Correo Electronico" value="{{$item->email}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-phone icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Telefono</label>
                                            <input class="form-control input-style" type="number" id="telefono" name="telefono" placeholder="telefono" value="{{$item->telefono}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group position-relative mt-3 ">
                                            <i class="fa fa-user-times icon-style-2"></i>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Dar de baja a {{$item->name}}</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="baja" name="baja">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-street-view icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Firma</label>
                                            <input type="file" class="form-control input-style" id="firma" name="firma" value="{{$item->firma}}">
                                            <img src="{{asset('firma/'.$item->firma)}}" class="img-firma">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" >
                                            <i class="fa fa-lock icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Foto</label>
                                            <input type="file" class="form-control input-style" id="foto" name="foto" value="{{$item->foto}}">
                                            <img src="{{asset('foto/'.$item->foto)}}" class="img-firma">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-street-view icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Emergencia llamar a</label>
                                            <input type="text" class="form-control input-style" id="nombre_emergencia" name="nombre_emergencia" value="{{$item->nombre_emergencia}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" >
                                            <i class="fa fa-lock icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Telefono emergencia</label>
                                            <input type="text" class="form-control input-style" id="telefono_emergencia" name="telefono_emergencia" value="{{$item->telefono_emergencia}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-6">
                                        <div class="form-group mb-3 position-relative" style="position: relative">
                                            <i class="fa fa-street-view icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">direccion</label>
                                            <textarea type="text" class="form-control input-style" cols="3" rows="3" id="calle" name="calle">{{$item->calle}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3 position-relative">
                                            <i class="fa fa-cubes icon-style-2"></i>
                                            <label class="form-label label-custom-yellow">Role</label>
                                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                        </div>
                                    </div>

                                </div>
                        </div>
                        {{-- tab datos de info --}}

                        {{-- tab datos de trabajadors --}}
                        <div class="tab-pane fade" id="pills-trabajador{{$item->id}}" role="tabpanel" aria-labelledby="pills-trabajador-tab{{$item->id}}">
                            <label for="">Datos del Trabajador</label>
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Fecha ingreso</label>
                                        <input type="date" class="form-control input-style" id="alta" name="alta" value="{{$item->alta}}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Seguro social</label>
                                        <input type="text" class="form-control input-style" id="seguro_social" name="seguro_social" value="{{$item->seguro_social}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Enfermedad</label>
                                        <input type="text" class="form-control input-style" id="enfermedad" name="enfermedad" value="{{$item->enfermedad}}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Alergias</label>
                                        <input type="text" class="form-control input-style" id="alergias" name="alergias" value="{{$item->alergias}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- tab datos de trabajador --}}

                        {{-- tab datos de nom --}}
                        <div class="tab-pane fade" id="nom{{$item->id}}" role="tabpanel" aria-labelledby="nom-tab{{$item->id}}">
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label for="">Estado Civil</label>
                                        <select class="form-select" aria-label="Default select example" name="estado_civil" id="estado_civil">
                                            <option value="{{$item->estado_civil}}">{{$item->estado_civil}}</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Union Libre">Union Libre</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viudo">Viudo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Nivel de estudios</label>
                                        <select class="form-select" aria-label="Default select example" id="estudios" name="estudios">
                                            <option value="{{$item->estudios}}">{{$item->estudios}}</option>
                                            <option value="Primaria">Primaria</option>
                                            <option value="Secundaria">Secundaria</option>
                                            <option value="Preparatoria o bachillerato">Preparatoria o bachillerato</option>
                                            <option value="Tecnico superior">Tecnico superior</option>
                                            <option value="Licenciatura">Licenciatura</option>
                                            <option value="Maestria">Maestria</option>
                                            <option value="Doctorado">Doctorado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label for="">Tipo puesto</label>
                                        <select class="form-select" name="puesto" id="puesto" required>
                                            <option value="{{$item->puesto}}">{{$item->puesto}}</option>
                                            <option value="Empresario Gasolinero">Empresario Gasolinero</option>
                                            <option value="Gerente">Gerente</option>
                                            <option value="Oficial Gasolinero">Oficial Gasolinero</option>
                                            <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                                            <option value="Oficial de Mantenimiento">Oficial de Mantenimiento</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label >Tipo contratación</label>
                                        <select class="form-select" aria-label="Default select example" id="contratacion" name="contratacion">
                                            <option value="{{$item->contratacion}}">{{$item->contratacion}}</option>
                                            <option value="Obra o proyecto">Obra o proyecto</option>
                                            <option value="Tiempo indeterminado">Tiempo indeterminado</option>
                                            <option value="Tiempo determinado">Tiempo determinado</option>
                                            <option value="Honorarios">Honorarios</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label for="">Tipo personal</label>
                                        <select class="form-select" aria-label="Default select example" id="personal" name="personal">
                                            <option value="{{$item->personal}}">{{$item->personal}}</option>
                                            <option value="Sindicalizado">Sindicalizado</option>
                                            <option value="Confianza">Confianza</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Jornada de trabajo</label>
                                        <select class="form-select" aria-label="Default select example" id="jornada" name="jornada">
                                            <option value="{{$item->jornada}}">{{$item->jornada}}</option>
                                            <option value="Diurno">Diurno</option>
                                            <option value="Nocturno">Nocturno</option>
                                            <option value="Mixto">Mixto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label for="">Rotación de turnos</label>
                                        <input class="form-check-input" value="{{$item->rotacion_turnos}}" type="checkbox" value="1" id="rotacion_turnos" name="rotacion_turnos">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Tiempo puesto actual</label>
                                        <input type="text" class="form-control input-style" value="{{$item->tiempo_puesto}}" id="tiempo_puesto" name="tiempo_puesto">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" >
                                        <i class="fa fa-lock icon-style-2"></i>
                                        <label for="">Experencia laboral</label>
                                        <input type="text" class="form-control input-style" value="{{$item->experiencia}}" id="experiencia" name="experiencia">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="form-group mb-3 position-relative" style="position: relative">
                                        <i class="fa fa-street-view icon-style-2"></i>
                                        <label class="form-label label-custom-yellow">Departamento/Sección/Área</label>
                                        <input type="text" class="form-control input-style" value="{{$item->departamento}}" id="departamento" name="departamento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- tab datos de nom --}}
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="mt-5 btn-sinestilo" type="submit">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-floppy-o"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
