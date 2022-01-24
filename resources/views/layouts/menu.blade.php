<div class="modal fade modal-dialog modal-dialog-centered" role="dialog" tabindex="-1" id="modal-menu" aria-labelledby="modal-menu" style="width: 100%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-modal-content">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <h1 class="text-white" style="font-size: 30px;">Menu</h1>
                                <button class="btn btn-close btn-menu" type="button" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1;border-radius: 30px!important;padding:6px;">
                                </button>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="false" id="carousel-1">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <img class="img-card-menu" src="assets/img/tank-truck%20(1).png">
                                                <h4 class="card-title card-menu-title">Pipa</h4>
                                            </div>
                                        </div>
                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <img class="img-card-menu" src="assets/img/spray-bottle.png">
                                                <h4 class="card-title card-menu-title">Producto</h4>
                                            </div>
                                        </div>
                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <img class="img-card-menu" src="assets/img/dosier.png">
                                                <h4 class="card-title card-menu-title">Repor</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <img class="img-card-menu" src="assets/img/barra-grafica.png">
                                                <h4 class="card-title card-menu-title">Metas</h4>
                                            </div>
                                        </div>
                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <img class="img-card-menu" src="assets/img/roles.png">
                                                <h4 class="card-title card-menu-title">Roles</h4>
                                            </div>
                                        </div>
                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <a style="text-decoration: none;color: #000000" href="{{ route('create.empresa') }}">
                                                    <img class="img-card-menu" src="assets/img/empresa.png">
                                                    <h4 class="card-title card-menu-title">Empresa</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">

                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <a style="text-decoration: none;color: #000000" href="{{ route('create.usuario') }}">
                                                    <img class="img-card-menu" src="assets/img/team.png">
                                                    <h4 class="card-title card-menu-title">Users</h4>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="card card-menu">
                                            <div class="card-body">
                                                <a  style="text-decoration: none;color: #000000" href="{{ route('create.sucursal') }}">
                                                    <img class="img-card-menu" src="assets/img/gasolinera.png">
                                                    <h4 class="card-title card-menu-title">Sucursal</h4>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
