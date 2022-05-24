<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

   Route::get('/', function () {
        return view('/login');
    });

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    /*|--------------------------------------------------------------------------
    |Usuario
    |--------------------------------------------------------------------------*/
    Route::get('/usuario', [App\Http\Controllers\UserController::class, 'index'])->name('index.usuario');
    Route::get('/create/usuario', [App\Http\Controllers\UserController::class, 'create'])->name('create.usuario');
    Route::post('/store/usuario', [App\Http\Controllers\UserController::class, 'store'])->name('store.usuario');
    Route::get('/edit/usuario/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.usuario');
    Route::patch('/update/usuario/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update.usuario');

    Route::patch('/usuario/update/password/{id}', [App\Http\Controllers\UserController::class, 'update_usuario_password'])->name('update_usuario_password.usuario');
    Route::get('/create/usuario/{id}', [App\Http\Controllers\UserController::class, 'GetSucursalAgainstMainCatEdit']);

    /*|--------------------------------------------------------------------------
    |Empresas
    |--------------------------------------------------------------------------*/
    Route::get('/empresas', [App\Http\Controllers\EmpresaController::class, 'index'])->name('index.empresa');
    Route::get('/create/empresa', [App\Http\Controllers\EmpresaController::class, 'create'])->name('create.empresa');
    Route::post('/store/empresa', [App\Http\Controllers\EmpresaController::class, 'store'])->name('store.empresa');
    Route::get('/edit/empresa/{id}', [App\Http\Controllers\EmpresaController::class, 'edit'])->name('edit.empresa');
    Route::patch('/update/empresa/{id}', [App\Http\Controllers\EmpresaController::class, 'update'])->name('update.empresa');

    /*|--------------------------------------------------------------------------
    |Sucursales
    |--------------------------------------------------------------------------*/
    Route::get('/sucursales', [App\Http\Controllers\SucursalController::class, 'index'])->name('index.sucursal');
    Route::get('/create/sucursal', [App\Http\Controllers\SucursalController::class, 'create'])->name('create.sucursal');
    Route::post('/store/sucursal', [App\Http\Controllers\SucursalController::class, 'store'])->name('store.sucursal');
    Route::get('/edit/sucursal/{id}', [App\Http\Controllers\SucursalController::class, 'edit'])->name('edit.sucursal');
    Route::patch('/update/sucursal/{id}', [App\Http\Controllers\SucursalController::class, 'update'])->name('update.sucursal');

    /*|--------------------------------------------------------------------------
    |Calendario Admin
    |--------------------------------------------------------------------------*/

    Route::post('/calendar', [App\Http\Controllers\CalendarioController::class, 'store_calendar'])->name('calendar.store_calendar');
    Route::get('/calendar/show', [App\Http\Controllers\CalendarioController::class, 'show_calendar'])->name('calendar.show_calendar');
    Route::patch('/calendar/destroy/{id}', [App\Http\Controllers\CalendarioController::class, 'destroy_calendar'])->name('calendar.destroy_calendar');
    Route::patch('/calendar/update/{id}', [App\Http\Controllers\CalendarioController::class, 'update_calendar'])->name('calendar.update_calendar');

    Route::post('/calendario/temp', [App\Http\Controllers\CalendarioController::class, 'temp'])->name('calendar.temp');

    /*|--------------------------------------------------------------------------
    |Elementos
    |--------------------------------------------------------------------------*/

    Route::post('/tareas', [App\Http\Controllers\TareasController::class, 'store'])->name('tareas.store');
    Route::post('/tareas/form', [App\Http\Controllers\TareasController::class, 'formulario_3'])->name('tareas.formulario_3');
    Route::post('/elemento/store', [App\Http\Controllers\CorrectivaController::class, 'store'])->name('correctiva.store');

    /*|--------------------------------------------------------------------------
    |Actividades Admin
    |--------------------------------------------------------------------------*/
    Route::get('/admin/pendientes', [App\Http\Controllers\ElementosController::class, 'pendientes_admin'])->name('elementos.pendientes_admin');
    Route::get('/admin/terminadas', [App\Http\Controllers\ElementosController::class, 'terminadas_admin'])->name('elementos.terminadas_admin');
    Route::get('/admin/vencer', [App\Http\Controllers\ElementosController::class, 'por_vencer_admin'])->name('elementos.por_vencer_admin');

    /*|--------------------------------------------------------------------------
    |Actividades User
    |--------------------------------------------------------------------------*/
    Route::get('/pendientes', [App\Http\Controllers\ElementosController::class, 'pendientes'])->name('elementos.pendientes');
    Route::get('/terminadas', [App\Http\Controllers\ElementosController::class, 'terminadas'])->name('elementos.terminadas');
    Route::get('/vencer', [App\Http\Controllers\ElementosController::class, 'por_vencer'])->name('elementos.por_vencer');


    // Route::get('imprimir/ejecutar/{id}', [App\Http\Livewire\Ejecutars::class, 'pdf_ejecutar'])->name('print.ejecutar');

    /*|--------------------------------------------------------------------------
    |Consulta (Actividades)
    |--------------------------------------------------------------------------*/
    Route::get('/consulta', [App\Http\Controllers\ConsultaController::class, 'index'])->name('consulta.index');

    Route::get('/exportar/consulta', [App\Http\Controllers\ConsultaController::class, 'export'])->name('consulta.export');
    Route::get('/exportar/consulta/pre', [App\Http\Controllers\ConsultaController::class, 'exportpre'])->name('consulta.exportpre');
    Route::get('/exportar/consulta/diseño', [App\Http\Controllers\ConsultaController::class, 'exportdiseño'])->name('consulta.exportdiseño');
    Route::get('/exportar/consulta/nom', [App\Http\Controllers\ConsultaController::class, 'exportnom'])->name('consulta.exportnom');


    Route::get('/puesto/vi-02-04', [App\Http\Controllers\ViElementoController::class, 'puesto'])->name('consulta.puesto');
    Route::get('/puesto/formato/vi-02-04', [App\Http\Controllers\ViElementoController::class, 'puesto_formato'])->name('consulta.puesto_formato');

    /*|--------------------------------------------------------------------------
    |Difundir (Actividades)
    |--------------------------------------------------------------------------*/
    Route::post('difundir/store', [App\Http\Controllers\DifundirController::class, 'store'])->name('difundir.store')->middleware('auth');
    Route::post('difundir/update/{id}', [App\Http\Controllers\DifundirController::class, 'update'])->name('difundir.update');

    Route::get('/difundir/i-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_i_01_01.index');

    Route::get('/difundir/x-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_x_01_01.index');
    Route::get('/difundir/x-01-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_x_01_02.index');
    Route::get('/difundir/x-02-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_x_02_01.index');

    Route::get('/difundir/iii-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_iii_01_01.index');
    Route::get('/difundir/iv-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_iv_01_01.index');

    Route::get('/difundir/vi-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vi_01_01.index');
    Route::get('/difundir/vi-01-03', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vi_01_03.index');

    // Route::get('imprimir/difundir/{id}', [App\Http\Controllers\DifundirController::class, 'pdf_difundir'])->name('print.difundir');

    Route::get('/graficas', [App\Http\Controllers\ElementosController::class, 'graficas'])->name('graficas');

    Route::get('/admin/graficas', [App\Http\Controllers\ElementosController::class, 'graficas_admin'])->name('graficas_admin');

    /*|--------------------------------------------------------------------------
    |Configuracion
    |--------------------------------------------------------------------------*/
    Route::get('/configuracion', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('index.configuracion');
    Route::patch('/configuracion/update', [App\Http\Controllers\ConfiguracionController::class, 'update_firmas'])->name('update_firmas.configuracion');
    Route::patch('/configuracion/estacion/update', [App\Http\Controllers\ConfiguracionController::class, 'update_estacion'])->name('update_estacion.configuracion');
    Route::patch('/configuracion/ajustes/update', [App\Http\Controllers\ConfiguracionController::class, 'update_ajustes'])->name('update_ajustes.configuracion');

    /*|--------------------------------------------------------------------------
    |Preventiva (Actividades)
    |--------------------------------------------------------------------------*/
    Route::view('/preventiva/i-01-01', 'livewire.preventivas.index')->name('preventiva_i_01_01.index');

    Route::view('/preventiva/x-01-01', 'livewire.preventivas.index')->name('preventiva_x_01_01.index');
    Route::view('/preventiva/x-01-02', 'livewire.preventivas.index')->name('preventiva_x_01_02.index');
    Route::view('/preventiva/x-02-01', 'livewire.preventivas.index')->name('preventiva_x_02_01.index');

    Route::view('/preventiva/iii-01-01', 'livewire.preventivas.index')->name('preventiva_iii_01_01.index');
    Route::view('/preventiva/iv-01-01', 'livewire.preventivas.index')->name('preventiva_iv_01_01.index');

    Route::view('/preventiva/vi-01-01', 'livewire.preventivas.index')->name('preventiva_vi_01_01.index');
    Route::view('/preventiva/vi-01-03', 'livewire.preventivas.index')->name('preventiva_vi_01_03.index');

    /*|--------------------------------------------------------------------------
    |Evaluacion (I-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('ver/sasisopa-i-01-01', [App\Http\Controllers\iElementoController::class, 'pdf_sasisopa'])->name('pdf_sasisopa.view');
    Route::get('imprimir/sasisopa-i-01-01', [App\Http\Controllers\iElementoController::class, 'pdf_sasisopa_download'])->name('pdf_sasisopa.print');

    Route::get('ver/ii-01-01', [App\Http\Controllers\iiElementoController::class, 'pdf_sasisopa'])->name('pdf_ii.view');

    /*|--------------------------------------------------------------------------
    |Ejecutar (III-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/ejecutar/iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'index'])->name('ejecutar_iii_01_01.index');
    Route::post('/store/ejecutar/iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'store'])->name('store.ejecutar_iii-01-01');
    Route::patch('/update/ejecutar/iii-01-01/{id}', [App\Http\Controllers\iiiElementoController::class, 'update'])->name('update.ejecutar_iii-01-01');
    Route::delete('iii-01-01/eliminar/{id}', [App\Http\Controllers\iiiElementoController::class, 'destroy'])->name('destroy.ejecutar_iii-01-01');

    Route::get('ver/sasisopa-iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'pdf_sasisopa'])->name('pdf_iii.view');
    Route::get('imprimir/sasisopa-iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'pdf_sasisopa_download'])->name('pdf_iii.print');

    /*|--------------------------------------------------------------------------
    |Evaluacion (II-02-01)
    |--------------------------------------------------------------------------*/
    Route::get('/consulta/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'index'])->name('index.consulta');

    Route::get('/abandono/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_abandono'])->name('actividad_abandono.abandono');
    Route::get('/construccion/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_construccion'])->name('actividad_construccion.construccion');
    Route::get('/operacion/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_operacion'])->name('actividad_operacion.operacion');
    Route::get('/preparacion/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_preparacion'])->name('actividad_preparacion.preparacion');
    Route::get('/situaciones/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_situaciones'])->name('actividad_situaciones.situaciones');

    /*|--------------------------------------------------------------------------
    |Elemento (V-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/actualizar', [App\Http\Controllers\VElementoController::class, 'index'])->name('index.actualizar');
    Route::get('/consultar', [App\Http\Controllers\VElementoController::class, 'consultar'])->name('consultar.elemento5');


    /*|--------------------------------------------------------------------------
    |Evaluacion (VI-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/evaluacion', [App\Http\Controllers\ViElementoController::class, 'index'])->name('index.evaluacion');

    Route::get('/edit/evaluacion/{id}', [App\Http\Controllers\ViElementoController::class, 'edit_empresario'])->name('edit_empresario.evaluacion');
    Route::patch('/evaluacion/update/{id}', [App\Http\Controllers\ViElementoController::class, 'update_empresario'])->name('update_empresario.evaluacion');

    Route::get('/edit/evaluacion/gerente/{id}', [App\Http\Controllers\ViElementoController::class, 'edit_gerente'])->name('edit_gerente.evaluacion');
    Route::patch('/evaluacion/gerente/update/{id}', [App\Http\Controllers\ViElementoController::class, 'update_gerente'])->name('update_gerente.evaluacion');

    Route::get('/edit/evaluacion/gasolinero/{id}', [App\Http\Controllers\ViElementoController::class, 'edit_gasolinero'])->name('edit_gasolinero.evaluacion');
    Route::patch('/evaluacion/gasolinero/update/{id}', [App\Http\Controllers\ViElementoController::class, 'update_gasolinero'])->name('update_gasolinero.evaluacion');

    Route::get('/edit/evaluacion/administrativo/{id}', [App\Http\Controllers\ViElementoController::class, 'edit_administrativo'])->name('edit_administrativo.evaluacion');
    Route::patch('/evaluacion/administrativo/update/{id}', [App\Http\Controllers\ViElementoController::class, 'update_administrativo'])->name('update_administrativo.evaluacion');

    Route::get('/edit/evaluacion/mantenimiento/{id}', [App\Http\Controllers\ViElementoController::class, 'edit_mantenimiento'])->name('edit_mantenimiento.evaluacion');
    Route::patch('/evaluacion/mantenimiento/update/{id}', [App\Http\Controllers\ViElementoController::class, 'update_mantenimiento'])->name('update_mantenimiento.evaluacion');

    /*|--------------------------------------------------------------------------
    |X Elemento
    |--------------------------------------------------------------------------*/
    Route::post('/xlemento', [App\Http\Controllers\xElementoController::class, 'store'])->name('xelemento.store');
    Route::get('/xlemento/x-01-02', [App\Http\Controllers\xElementoController::class, 'create_preguntas'])->name('xelemento.create_preguntas');
    Route::post('/xlemento/x-01-02', [App\Http\Controllers\xElementoController::class, 'store_preguntas'])->name('xelemento.store_preguntas');

    Route::get('/xlemento/x-02-01', [App\Http\Controllers\xElementoController::class, 'create_x_02_01'])->name('x_02_01.create_preguntas');


});
