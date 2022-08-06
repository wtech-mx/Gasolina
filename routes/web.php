<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Models\UserProveedor;

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

    /*|--------------------------------------------------------------------------
    |Difundir (Actividades)
    |--------------------------------------------------------------------------*/
    Route::post('difundir/store', [App\Http\Controllers\DifundirController::class, 'store'])->name('difundir.store')->middleware('auth');
    Route::patch('difundir/update/{id}', [App\Http\Controllers\DifundirController::class, 'update'])->name('difundir.update');
    Route::delete('/difundir/{id}', [App\Http\Controllers\DifundirController::class, 'destroy'])->name('difundir.destroy');

    Route::get('/difundir/i-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_i_01_01.index');

    Route::get('/difundir/ii-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_ii_01_01.index');
    Route::get('/difundir/ii-02-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_ii_02_01.index');

    Route::get('/difundir/iii-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_iii_01_01.index');

    Route::get('/difundir/iv-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_iv_01_01.index');

    Route::get('/difundir/v-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_v_01_01.index');

    Route::get('/difundir/vi-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vi_01_01.index');
    Route::get('/difundir/vi-01-03', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vi_01_03.index');

    Route::get('/difundir/vii-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vii_01_01.index');
    Route::get('/difundir/vii-02-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vii_02_02.index');
    Route::get('/difundir/vii-03-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_vii_03_02.index');

    Route::get('/difundir/viii-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_viii_01_01.index');
    Route::get('/difundir/viii-01-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_viii_01_02.index');
    Route::get('/difundir/viii-01-03', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_viii_01_03.index');
    Route::get('/difundir/viii-01-04', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_viii_01_04.index');
    Route::get('/difundir/viii-01-05', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_viii_01_05.index');

    Route::get('/difundir/ix-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_ix_01_01.index');

    Route::get('/difundir/x-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_x_01_01.index');
    Route::get('/difundir/x-01-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_x_01_02.index');
    Route::get('/difundir/x-02-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_x_02_01.index');

    Route::get('/difundir/xi-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xi_01_01.index');

    Route::get('/difundir/xii-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xii_01_01.index');

    Route::get('/difundir/xiv-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xiv_01_01.index');
    Route::get('/difundir/xiv-01-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xiv_01_02.index');
    Route::get('/difundir/xiv-03-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xiv_03_01.index');

    Route::get('/difundir/xv-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xv_01_01.index');
    Route::get('/difundir/xv-01-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xv_01_02.index');

    Route::get('/difundir/xvi-01-01', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xvi_01_01.index');
    Route::get('/difundir/xvi-01-02', [App\Http\Controllers\DifundirController::class, 'index'])->name('difundir_xvi_01_02.index');

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
    Route::post('preventiva/store', [App\Http\Controllers\PreventivaController::class, 'store'])->name('preventiva.store')->middleware('auth');
    Route::patch('preventiva/update/{id}', [App\Http\Controllers\PreventivaController::class, 'update'])->name('preventiva.update');
    Route::delete('/preventiva/{id}', [App\Http\Controllers\PreventivaController::class, 'destroy'])->name('preventiva.destroy');

    Route::get('/preventiva/i-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_i_01_01.index');

    Route::get('/preventiva/ii-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_ii_01_01.index');
    Route::get('/preventiva/ii-02-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_ii_02_01.index');

    Route::get('/preventiva/iii-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_iii_01_01.index');

    Route::get('/preventiva/iv-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_iv_01_01.index');

    Route::get('/preventiva/v-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_v_01_01.index');

    Route::get('/preventiva/vi-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_vi_01_01.index');
    Route::get('/preventiva/vi-01-03', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_vi_01_03.index');

    Route::get('/preventiva/vii-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_vii_01_01.index');
    Route::get('/preventiva/vii-02-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_vii_02_02.index');
    Route::get('/preventiva/vii-03-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_vii_03_02.index');

    Route::get('/preventiva/viii-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_viii_01_01.index');
    Route::get('/preventiva/viii-01-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_viii_01_02.index');
    Route::get('/preventiva/viii-01-03', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_viii_01_03.index');
    Route::get('/preventiva/viii-01-04', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_viii_01_04.index');
    Route::get('/preventiva/viii-01-05', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_viii_01_05.index');

    Route::get('/preventiva/ix-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_ix_01_01.index');

    Route::get('/preventiva/x-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_x_01_01.index');
    Route::get('/preventiva/x-01-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_x_01_02.index');
    Route::get('/preventiva/x-02-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_x_02_01.index');

    Route::get('/preventiva/xi-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xi_01_01.index');

    Route::get('/preventiva/xii-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xii_01_01.index');

    Route::get('/preventiva/xiv-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xiv_01_01.index');
    Route::get('/preventiva/xiv-01-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xiv_01_02.index');
    Route::get('/preventiva/xiv-03-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xiv_03_01.index');

    Route::get('/preventiva/xv-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xv_01_01.index');
    Route::get('/preventiva/xv-01-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xv_01_02.index');

    Route::get('/preventiva/xvi-01-01', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xvi_01_01.index');
    Route::get('/preventiva/xvi-01-02', [App\Http\Controllers\PreventivaController::class, 'index'])->name('preventiva_xvi_01_02.index');

    /*|--------------------------------------------------------------------------
    |Evaluacion (I-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('ver/sasisopa-i-01-01', [App\Http\Controllers\iElementoController::class, 'pdf_sasisopa'])->name('pdf_sasisopa.view');
    Route::get('imprimir/sasisopa-i-01-01', [App\Http\Controllers\iElementoController::class, 'pdf_sasisopa_download'])->name('pdf_sasisopa.print');

    Route::get('ver/sasisopa-i-01', [App\Http\Controllers\iElementoController::class, 'pdf_sasisopa_i_01'])->name('pdf_i_01.view');
    Route::get('imprimir/sasisopa-i-01', [App\Http\Controllers\iElementoController::class, 'pdf_sasisopa_i_01_download'])->name('pdf_i_01.print');

    /*|--------------------------------------------------------------------------
    |Evaluacion (II-02-01)
    |--------------------------------------------------------------------------*/
    Route::get('/consulta/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'index'])->name('index.consulta');

    Route::get('/abandono/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_abandono'])->name('actividad_abandono.abandono');
    Route::get('/construccion/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_construccion'])->name('actividad_construccion.construccion');
    Route::get('/operacion/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_operacion'])->name('actividad_operacion.operacion');
    Route::get('/preparacion/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_preparacion'])->name('actividad_preparacion.preparacion');
    Route::get('/situaciones/actividad/ii-02-01', [App\Http\Controllers\iiElementoController::class, 'actividad_situaciones'])->name('actividad_situaciones.situaciones');

    Route::get('ver/sasisopa-ii-01-01', [App\Http\Controllers\iiElementoController::class, 'pdf_sasisopa_ii'])->name('pdf_ii.view');
    Route::get('imprimir/sasisopa-ii-01-01', [App\Http\Controllers\iiElementoController::class, 'pdf_sasisopa_ii_download'])->name('pdf_sasisopa_ii_download.print');

    Route::get('ver/sasisopa-ii-01', [App\Http\Controllers\iiElementoController::class, 'pdf_sasisopa_ii_01'])->name('pdf_ii_01.view');
    Route::get('imprimir/sasisopa-ii-01', [App\Http\Controllers\iiElementoController::class, 'pdf_sasisopa_ii_01_download'])->name('pdf_ii_01.print');

    /*|--------------------------------------------------------------------------
    |Ejecutar (III-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/ejecutar/iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'index'])->name('ejecutar_iii_01_01.index');
    Route::post('/store/ejecutar/iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'store'])->name('store.ejecutar_iii-01-01');
    Route::patch('/update/ejecutar/iii-01-01/{id}', [App\Http\Controllers\iiiElementoController::class, 'update'])->name('update.ejecutar_iii-01-01');
    Route::delete('iii-01-01/eliminar/{id}', [App\Http\Controllers\iiiElementoController::class, 'destroy'])->name('destroy.ejecutar_iii-01-01');

    Route::get('ver/sasisopa-iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'pdf_sasisopa'])->name('pdf_iii.view');
    Route::get('imprimir/sasisopa-iii-01-01', [App\Http\Controllers\iiiElementoController::class, 'pdf_sasisopa_download'])->name('pdf_iii.print');

    Route::get('ver/sasisopa-iii-01', [App\Http\Controllers\iiiElementoController::class, 'pdf_sasisopa_iii_01'])->name('pdf_iii_01.view');
    Route::get('imprimir/sasisopa-iii-01', [App\Http\Controllers\iiiElementoController::class, 'pdf_sasisopa_iii_01_download'])->name('pdf_iii_01.print');

    /*|--------------------------------------------------------------------------
    |Elemento (IV-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('ver/sasisopa-iv', [App\Http\Controllers\ivElementoController::class, 'pdf_sasisopa_iv'])->name('pdf_iv.view');
    Route::get('imprimir/sasisopa-iv', [App\Http\Controllers\ivElementoController::class, 'pdf_sasisopa_iv_download'])->name('pdf_iv.print');

    Route::get('ver/sasisopa-iv-01', [App\Http\Controllers\ivElementoController::class, 'pdf_sasisopa_iv_01'])->name('pdf_iv_01.view');
    Route::get('imprimir/sasisopa-iv-01', [App\Http\Controllers\ivElementoController::class, 'pdf_sasisopa_iv_01_download'])->name('pdf_iv_01.print');

    /*|--------------------------------------------------------------------------
    |Elemento (V-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/actualizar', [App\Http\Controllers\vElementoController::class, 'index'])->name('index.actualizar');
    Route::get('/consultar', [App\Http\Controllers\vElementoController::class, 'consultar'])->name('consultar.elemento5');

    Route::get('ver/generar-v', [App\Http\Controllers\vElementoController::class, 'pdf_generar_v'])->name('pdf_generar_v.view');
    Route::get('ver/otorgamiento-v', [App\Http\Controllers\vElementoController::class, 'pdf_otorgamiento_v'])->name('pdf_otorgamiento_v.view');

    Route::get('ver/sasisopa-v', [App\Http\Controllers\vElementoController::class, 'pdf_sasisopa_v'])->name('pdf_v.view');
    Route::get('imprimir/sasisopa-v', [App\Http\Controllers\vElementoController::class, 'pdf_sasisopa_v_download'])->name('pdf_v.print');

    Route::get('ver/sasisopa-v-01', [App\Http\Controllers\vElementoController::class, 'pdf_sasisopa_v_01'])->name('pdf_v_01.view');
    Route::get('imprimir/sasisopa-v-01', [App\Http\Controllers\vElementoController::class, 'pdf_sasisopa_v_01_download'])->name('pdf_v_01.print');
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

    Route::get('/puesto/vi-02-04', [App\Http\Controllers\ViElementoController::class, 'puesto'])->name('consulta.puesto');
    Route::get('/puesto/formato/vi-02-04', [App\Http\Controllers\ViElementoController::class, 'puesto_formato'])->name('consulta.puesto_formato');

    Route::get('ver/sasisopa-vi', [App\Http\Controllers\ViElementoController::class, 'pdf_sasisopa_vi'])->name('pdf_vi.view');
    Route::get('imprimir/sasisopa-vi', [App\Http\Controllers\ViElementoController::class, 'pdf_sasisopa_vi_download'])->name('pdf_vi.print');

    Route::get('ver/sasisopa-vi-01', [App\Http\Controllers\ViElementoController::class, 'pdf_sasisopa_vi_01'])->name('pdf_vi_01.view');
    Route::get('imprimir/sasisopa-vi-01', [App\Http\Controllers\ViElementoController::class, 'pdf_sasisopa_vi_01_download'])->name('pdf_vi_01.print');

     /*|--------------------------------------------------------------------------
    |Evaluacion (VII-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/index/vii-02-02', [App\Http\Controllers\viiElementoController::class, 'index'])->name('index.vii_02_02');
    Route::post('/store/vii-02-02', [App\Http\Controllers\viiElementoController::class, 'store'])->name('store.vii_02_02');
    Route::patch('/update/vii-02-02/{id}', [App\Http\Controllers\viiElementoController::class, 'update'])->name('update.vii_02_02');
    Route::delete('/delete/vii-02-02/{id}', [App\Http\Controllers\viiElementoController::class, 'destroy'])->name('destroy.vii_02_02');

    Route::get('/index/vii-03-02', [App\Http\Controllers\viiElementoController::class, 'index_03'])->name('index.vii_03_02');
    Route::post('/store/vii-03-02', [App\Http\Controllers\viiElementoController::class, 'store_03'])->name('store.vii_03_02');
    Route::patch('/update/vii-03-02/{id}', [App\Http\Controllers\viiElementoController::class, 'update_03'])->name('update.vii_03_02');
    Route::delete('/delete/vii-03-02/{id}', [App\Http\Controllers\viiElementoController::class, 'destroy_03'])->name('destroy.vii_03_02');

    Route::get('ver/sasisopa-vii', [App\Http\Controllers\viiElementoController::class, 'pdf_sasisopa_vii'])->name('pdf_vii.view');
    Route::get('imprimir/sasisopa-vii', [App\Http\Controllers\viiElementoController::class, 'pdf_sasisopa_vii_download'])->name('pdf_vii.print');

    Route::get('ver/sasisopa-vii-01', [App\Http\Controllers\viiElementoController::class, 'pdf_sasisopa_vii_01'])->name('pdf_vii_01.view');
    Route::get('imprimir/sasisopa-vii-01', [App\Http\Controllers\viiElementoController::class, 'pdf_sasisopa_vii_01_download'])->name('pdf_vii_01.print');

    Route::get('ver/sasisopa-vii-03', [App\Http\Controllers\viiElementoController::class, 'pdf_sasisopa_vii_03'])->name('pdf_vii_03.view');
    Route::get('imprimir/sasisopa-vii-03', [App\Http\Controllers\viiElementoController::class, 'pdf_sasisopa_vii_03_download'])->name('pdf_vii_03.print');

    Route::get('ver/formato-difusion/{id}', [App\Http\Controllers\viiElementoController::class, 'formato_difusion'])->name('formato_difusion.view');

     /*|--------------------------------------------------------------------------
    |Evaluacion (VIII-01-01)
    |--------------------------------------------------------------------------*/
    Route::get('/index/viii-01-01', [App\Http\Controllers\viiiElementoController::class, 'index'])->name('index.viii_01_01');
    Route::post('/store/viii-01-01', [App\Http\Controllers\viiiElementoController::class, 'store'])->name('store.viii_01_01');
    Route::patch('/update/viii-01-01/{id}', [App\Http\Controllers\viiiElementoController::class, 'update'])->name('update.viii_01_01');
    Route::delete('/delete/viii-01-01/{id}', [App\Http\Controllers\viiiElementoController::class, 'destroy'])->name('destroy.viii_01_01');

    Route::get('/index/viii-01-02', [App\Http\Controllers\viiiElementoController::class, 'index_02'])->name('index.viii_01_02');
    Route::post('/store/viii-01-02', [App\Http\Controllers\viiiElementoController::class, 'store_02'])->name('store.viii_01_02');
    Route::patch('/update/viii-01-02/{id}', [App\Http\Controllers\viiiElementoController::class, 'update_02'])->name('update.viii_01_02');
    Route::delete('/delete/viii-01-02/{id}', [App\Http\Controllers\viiiElementoController::class, 'destroy_02'])->name('destroy.viii_01_02');

    Route::get('/index/viii-01-03', [App\Http\Controllers\viiiElementoController::class, 'index_03'])->name('index.viii_01_03');
    Route::post('/store/viii-01-03', [App\Http\Controllers\viiiElementoController::class, 'store_03'])->name('store.viii_01_03');
    Route::patch('/update/viii-01-03/{id}', [App\Http\Controllers\viiiElementoController::class, 'update_03'])->name('update.viii_01_03');
    Route::delete('/delete/viii-01-03/{id}', [App\Http\Controllers\viiiElementoController::class, 'destroy_03'])->name('destroy.viii_01_03');

    Route::get('/index/viii-01-04', [App\Http\Controllers\viiiElementoController::class, 'index_04'])->name('index.viii_01_04');
    Route::post('/store/viii-01-04', [App\Http\Controllers\viiiElementoController::class, 'store_04'])->name('store.viii_01_04');
    Route::patch('/update/viii-01-04/{id}', [App\Http\Controllers\viiiElementoController::class, 'update_04'])->name('update.viii_01_04');
    Route::delete('/delete/viii-01-04/{id}', [App\Http\Controllers\viiiElementoController::class, 'destroy_04'])->name('destroy.viii_01_04');

    Route::get('/index/viii-01-05', [App\Http\Controllers\viiiElementoController::class, 'index_05'])->name('index.viii_01_05');
    Route::post('/store/viii-01-05', [App\Http\Controllers\viiiElementoController::class, 'store_05'])->name('store.viii_01_05');
    Route::patch('/update/viii-01-05/{id}', [App\Http\Controllers\viiiElementoController::class, 'update_05'])->name('update.viii_01_05');
    Route::delete('/delete/viii-01-05/{id}', [App\Http\Controllers\viiiElementoController::class, 'destroy_05'])->name('destroy.viii_01_05');

    Route::get('ver/sasisopa-viii', [App\Http\Controllers\viiiElementoController::class, 'pdf_sasisopa_viii'])->name('pdf_viii.view');
    Route::get('imprimir/sasisopa-viii', [App\Http\Controllers\viiiElementoController::class, 'pdf_sasisopa_viii_download'])->name('pdf_viii.print');

    Route::get('ver/sasisopa-viii_01', [App\Http\Controllers\viiiElementoController::class, 'pdf_sasisopa_viii_01'])->name('pdf_viii_01.view');
    Route::get('imprimir/sasisopa-viii_01', [App\Http\Controllers\viiiElementoController::class, 'pdf_sasisopa_viii_01_download'])->name('pdf_viii_01.print');

    /*|--------------------------------------------------------------------------
    |IX Elemento
    |--------------------------------------------------------------------------*/
    Route::get('/index/ix-01-01', [App\Http\Controllers\ixElementoController::class, 'index'])->name('index.ix_01_01');
    Route::post('/store/ix-01-01', [App\Http\Controllers\ixElementoController::class, 'store'])->name('store.ix_01_01');
    Route::patch('/update/ix-01-01/{id}', [App\Http\Controllers\ixElementoController::class, 'update'])->name('update.ix_01_01');
    Route::delete('/delete/ix-01-01/{id}', [App\Http\Controllers\ixElementoController::class, 'destroy'])->name('destroy.ix_01_01');

    Route::get('ver/sasisopa-ix', [App\Http\Controllers\ixElementoController::class, 'pdf_sasisopa_ix'])->name('pdf_ix.view');
    Route::get('imprimir/sasisopa-ix', [App\Http\Controllers\ixElementoController::class, 'pdf_sasisopa_ix_download'])->name('pdf_ix.print');

    Route::get('ver/sasisopa-ix-01', [App\Http\Controllers\ixElementoController::class, 'pdf_sasisopa_ix_01'])->name('pdf_ix_01.view');
    Route::get('imprimir/sasisopa-ix-01', [App\Http\Controllers\ixElementoController::class, 'pdf_sasisopa_ix_01_download'])->name('pdf_ix_01.print');

    /*|--------------------------------------------------------------------------
    |X Elemento
    |--------------------------------------------------------------------------*/
    Route::post('/xlemento', [App\Http\Controllers\xElementoController::class, 'store'])->name('xelemento.store');
    Route::get('/xlemento/x-01-02', [App\Http\Controllers\xElementoController::class, 'create_preguntas'])->name('xelemento.create_preguntas');
    Route::post('/xlemento/x-01-02', [App\Http\Controllers\xElementoController::class, 'store_preguntas'])->name('xelemento.store_preguntas');

    Route::get('/xlemento/x-02-01', [App\Http\Controllers\xElementoController::class, 'create_x_02_01'])->name('x_02_01.create_preguntas');

    /*|--------------------------------------------------------------------------
    |XI Elemento
    |--------------------------------------------------------------------------*/
    Route::get('/index/xi-01-01', [App\Http\Controllers\xiElementoController::class, 'index'])->name('index.xi_01_01');
    Route::post('/store/xi-01-01', [App\Http\Controllers\xiElementoController::class, 'store'])->name('store.xi_01_01');
    Route::patch('/update/xi-01-01/{id}', [App\Http\Controllers\xiElementoController::class, 'update'])->name('update.xi_01_01');
    Route::delete('/delete/xi-01-01/{id}', [App\Http\Controllers\xiElementoController::class, 'destroy'])->name('destroy.xi_01_01');

    Route::get('ver/sasisopa-xi', [App\Http\Controllers\xiElementoController::class, 'pdf_sasisopa_xi'])->name('pdf_xi.view');
    Route::get('imprimir/sasisopa-xi', [App\Http\Controllers\xiElementoController::class, 'pdf_sasisopa_xi_download'])->name('pdf_xi.print');

    /*|--------------------------------------------------------------------------
    |XII Elemento
    |--------------------------------------------------------------------------*/
    Route::get('/index/xii-01-01', [App\Http\Controllers\xiiElementoController::class, 'index'])->name('index.xii_01_01');
    Route::post('/store/xii-01-01', [App\Http\Controllers\xiiElementoController::class, 'store'])->name('store.xii_01_01');
    Route::patch('/update/xii-01-01/{id}', [App\Http\Controllers\xiiElementoController::class, 'update'])->name('update.xii_01_01');
    Route::delete('/delete/xii-01-01/{id}', [App\Http\Controllers\xiiElementoController::class, 'destroy'])->name('destroy.xii_01_01');

    Route::get('ver/sasisopa-xii', [App\Http\Controllers\xiiElementoController::class, 'pdf_sasisopa_xii'])->name('pdf_xii.view');
    Route::get('imprimir/sasisopa-xii', [App\Http\Controllers\xiiElementoController::class, 'pdf_sasisopa_xii_download'])->name('pdf_xii.print');

    Route::get('ver/sasisopa-xii-01', [App\Http\Controllers\xiiElementoController::class, 'pdf_sasisopa_xii_01'])->name('pdf_xii_01.view');
    Route::get('imprimir/sasisopa-xii-01', [App\Http\Controllers\xiiElementoController::class, 'pdf_sasisopa_xii_01_download'])->name('pdf_xii_01.print');

    Route::delete('/remision/{id}', function ($id) {
        $xii_elemento = UserProveedor::destroy($id);
        return Response::json($xii_elemento);
    });

    /*|--------------------------------------------------------------------------
    |XIV Elemento
    |--------------------------------------------------------------------------*/
    Route::get('/index/xiv-01-01', [App\Http\Controllers\xivElementoController::class, 'index_01'])->name('index.xiv_01_01');
    Route::post('/store/xiv-01-01', [App\Http\Controllers\xivElementoController::class, 'store_01'])->name('store.xiv_01_01');
    Route::patch('/update/xiv-01-01/{id}', [App\Http\Controllers\xivElementoController::class, 'update_01'])->name('update.xiv_01_01');
    Route::delete('/delete/xiv-01-01/{id}', [App\Http\Controllers\xivElementoController::class, 'destroy_01'])->name('destroy.xiv_01_01');

    Route::get('/index/xiv-01-02', [App\Http\Controllers\xivElementoController::class, 'index'])->name('index.xiv_01_02');
    Route::post('/store/xiv-01-02', [App\Http\Controllers\xivElementoController::class, 'store'])->name('store.xiv_01_02');
    Route::patch('/update/xiv-01-02/{id}', [App\Http\Controllers\xivElementoController::class, 'update'])->name('update.xiv_01_02');
    Route::delete('/delete/xiv-01-02/{id}', [App\Http\Controllers\xivElementoController::class, 'destroy'])->name('destroy.xiv_01_02');

    Route::get('/index/xiv-01-03', [App\Http\Controllers\xivElementoController::class, 'index_xiv_01_03'])->name('index.xiv_01_03');
    Route::post('/store/xiv-01-03', [App\Http\Controllers\xivElementoController::class, 'store_xiv_01_03'])->name('store.xiv_01_03');
    Route::patch('/update/xiv-01-03/{id}', [App\Http\Controllers\xivElementoController::class, 'update_xiv_01_03'])->name('update.xiv_01_03');
    Route::delete('/delete/xiv-01-03/{id}', [App\Http\Controllers\xivElementoController::class, 'destroy_xiv_01_03'])->name('destroy.xiv_01_03');

    Route::get('/index/xiv-01-04', [App\Http\Controllers\xivElementoController::class, 'index_xiv_01_04'])->name('index.xiv_01_04');
    Route::post('/store/xiv-01-04', [App\Http\Controllers\xivElementoController::class, 'store_xiv_01_04'])->name('store.xiv_01_04');
    Route::patch('/update/xiv-01-04/{id}', [App\Http\Controllers\xivElementoController::class, 'update_xiv_01_04'])->name('update.xiv_01_04');
    Route::delete('/delete/xiv-01-04/{id}', [App\Http\Controllers\xivElementoController::class, 'destroy_xiv_01_04'])->name('destroy.xiv_01_04');

    Route::get('/index/xiv-01-05', [App\Http\Controllers\xivElementoController::class, 'index_xiv_01_05'])->name('index.xiv_01_05');
    Route::post('/store/xiv-01-05', [App\Http\Controllers\xivElementoController::class, 'store_xiv_01_05'])->name('store.xiv_01_05');
    Route::patch('/update/xiv-01-05/{id}', [App\Http\Controllers\xivElementoController::class, 'update_xiv_01_05'])->name('update.xiv_01_05');
    Route::delete('/delete/xiv-01-05/{id}', [App\Http\Controllers\xivElementoController::class, 'destroy_xiv_01_05'])->name('destroy.xiv_01_05');

    Route::get('/index/xiv-01-06', [App\Http\Controllers\xivElementoController::class, 'index_xiv_01_06'])->name('index.xiv_01_06');
    Route::post('/store/xiv-01-06', [App\Http\Controllers\xivElementoController::class, 'store_xiv_01_06'])->name('store.xiv_01_06');
    Route::patch('/update/xiv-01-06/{id}', [App\Http\Controllers\xivElementoController::class, 'update_xiv_01_06'])->name('update.xiv_01_06');
    Route::delete('/delete/xiv-01-06/{id}', [App\Http\Controllers\xivElementoController::class, 'destroy_xiv_01_06'])->name('destroy.xiv_01_06');

    Route::get('ver/sasisopa-xiv', [App\Http\Controllers\xivElementoController::class, 'pdf_sasisopa_xiv'])->name('pdf_xiv.view');
    Route::get('imprimir/sasisopa-xiv', [App\Http\Controllers\xivElementoController::class, 'pdf_sasisopa_xiv_download'])->name('pdf_xiv.print');

    Route::get('ver/sasisopa-xiv-02', [App\Http\Controllers\xivElementoController::class, 'pdf_sasisopa_xiv_02'])->name('pdf_xiv_02.view');
    Route::get('imprimir/sasisopa-xiv-02', [App\Http\Controllers\xivElementoController::class, 'pdf_sasisopa_xiv_02_download'])->name('pdf_xiv_02.print');

    Route::get('ver/sasisopa-xiv-03', [App\Http\Controllers\xivElementoController::class, 'pdf_sasisopa_xiv_03'])->name('pdf_xiv_03.view');
    Route::get('imprimir/sasisopa-xiv-03', [App\Http\Controllers\xivElementoController::class, 'pdf_sasisopa_xiv_03_download'])->name('pdf_xiv_03.print');

    /*|--------------------------------------------------------------------------
    |XV Elemento
    |--------------------------------------------------------------------------*/
    Route::get('/index/xv-01-01', [App\Http\Controllers\xvElementoController::class, 'index'])->name('index.xv_01_01');
    Route::post('/store/xv-01-01', [App\Http\Controllers\xvElementoController::class, 'store'])->name('store.xv_01_01');
    Route::patch('/update/xv-01-01/{id}', [App\Http\Controllers\xvElementoController::class, 'update'])->name('update.xv_01_01');
    Route::delete('/delete/xv-01-01/{id}', [App\Http\Controllers\xvElementoController::class, 'destroy'])->name('destroy.xv_01_01');

    Route::get('/index/xv-01-02', [App\Http\Controllers\xvElementoController::class, 'index_02'])->name('index.xv_01_02');
    Route::post('/store/xv-01-02', [App\Http\Controllers\xvElementoController::class, 'store_02'])->name('store.xv_01_02');
    Route::patch('/update/xv-01-02/{id}', [App\Http\Controllers\xvElementoController::class, 'update_02'])->name('update.xv_01_02');
    Route::delete('/delete/xv-01-02/{id}', [App\Http\Controllers\xvElementoController::class, 'destroy_02'])->name('destroy.xv_01_02');

    Route::get('ver/sasisopa-xv', [App\Http\Controllers\xvElementoController::class, 'pdf_sasisopa_xv'])->name('pdf_xv.view');
    Route::get('imprimir/sasisopa-xv', [App\Http\Controllers\xvElementoController::class, 'pdf_sasisopa_xv_download'])->name('pdf_xv.print');

    Route::get('ver/sasisopa-xv-01', [App\Http\Controllers\xvElementoController::class, 'pdf_sasisopa_xv_01'])->name('pdf_xv_01.view');
    Route::get('imprimir/sasisopa-xv-01', [App\Http\Controllers\xvElementoController::class, 'pdf_sasisopa_xv_01_download'])->name('pdf_xv_01.print');

    /*|--------------------------------------------------------------------------
    |XVI Elemento
    |--------------------------------------------------------------------------*/
    Route::get('/index/xvi-01-01', [App\Http\Controllers\xviElementoController::class, 'index'])->name('index.xvi_01_01');
    Route::post('/store/xvi-01-01', [App\Http\Controllers\xviElementoController::class, 'store'])->name('store.xvi_01_01');
    Route::patch('/update/xvi-01-01/{id}', [App\Http\Controllers\xviElementoController::class, 'update'])->name('update.xvi_01_01');
    Route::delete('/delete/xvi-01-01/{id}', [App\Http\Controllers\xviElementoController::class, 'destroy'])->name('destroy.xvi_01_01');

    Route::get('/index/xvi-01-02', [App\Http\Controllers\xviElementoController::class, 'index_02'])->name('index.xvi_01_02');
    Route::post('/store/xvi-01-02', [App\Http\Controllers\xviElementoController::class, 'store_02'])->name('store.xvi_01_02');
    Route::patch('/update/xvi-01-02/{id}', [App\Http\Controllers\xviElementoController::class, 'update_02'])->name('update.xvi_01_02');
    Route::delete('/delete/xvi-01-02/{id}', [App\Http\Controllers\xviElementoController::class, 'destroy_02'])->name('destroy.xvi_01_02');

    Route::get('ver/sasisopa-xvi', [App\Http\Controllers\xviElementoController::class, 'pdf_sasisopa_xvi'])->name('pdf_xvi.view');
    Route::get('imprimir/sasisopa-xvi', [App\Http\Controllers\xviElementoController::class, 'pdf_sasisopa_xvi_download'])->name('pdf_xvi.print');

    Route::get('ver/sasisopa-xvi-01', [App\Http\Controllers\xviElementoController::class, 'pdf_sasisopa_xvi_01'])->name('pdf_xvi_01.view');
    Route::get('imprimir/sasisopa-xvi-01', [App\Http\Controllers\xviElementoController::class, 'pdf_sasisopa_xvi_01_download'])->name('pdf_xvi_01.print');

});
