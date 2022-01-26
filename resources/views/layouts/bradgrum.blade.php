            <div class="col-12 mt-3">
                <div class="d-flex justify-content-between p-3">

                    <a href="javascript:history.back()" class="btn btn-back">
                        <i class="fa fa-arrow-circle-o-left btn-icon-back"></i>
                    </a >

                    <h1 class="text-white">@yield('title')</h1>

                {{--<a class="btn btn-back" href="{{ route('create.empresa') }}">--}}

                    <a class="btn btn-back" href="@yield('ruta')">
                        <i class="fa @yield('icon') btn-icon-back"></i>
                    </a>

                </div>
            </div>
