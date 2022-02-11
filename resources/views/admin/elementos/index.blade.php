@extends('layouts.app')

@section('content')

<div class="box">
        <div class="row">

            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">Elementos</h1>

                    <a class="btn btn-back" href=" {{ route('create.empresa') }}">
                        <i class="fa fa-plus btn-icon-back"></i>
                    </a>

                </div>
            </div>

            <div class="col-12 p-4">
                <h3 style="color: #FFC300!important">Más usadas</h3>
            </div>

            <div class="d-flex justify-content-between p-3">
                <div class="circulo col-1 ">
                    <p class="text-center" style="color: #FFC300">1</p>
                </div>

                <div class="circulo col-1 ">
                    <p class="text-center" style="color: #FFC300">2</p>
                </div>

                <div class="circulo col-1 ">
                    <p class="text-center" style="color: #FFC300">3</p>
                </div>

                <div class="circulo col-1 ">
                    <p class="text-center" style="color: #FFC300">4</p>
                </div>
            </div>

        </div>
</div>

@endsection
