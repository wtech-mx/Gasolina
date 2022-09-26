<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Carbon\Carbon;
Use Alert;
use App\Models\ViElemento;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $users = User::
            // where('empresa', '=', NULL)
            // ->where('id_empresa', '!=', NULL)
            // ->where('id_sucursal', '!=', NULL)
            get();

        return view('admin.usuarios.index', compact('users'));
    }


    /* Trae las sucursales con la empresa seleccionada  */
    public function GetSucursalAgainstMainCatEdit($id)
    {
        echo json_encode(DB::table('users')->where('id_empresa', $id)->where('id_sucursal', '=', NULL)->get());
    }

    public function create()
    {
        $empresa = DB::table('users')
            ->where('empresa', '=', 1)
            ->get();

        $sucursal = DB::table('users')
            ->where('empresa', '=', 2)
            ->get();

        $roles = Role::pluck('name','name')->all();

        return view('admin.usuarios.create', compact('empresa', 'sucursal','roles'));
    }

    public function store(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|confirmed|min:9',
            'roles' => 'required'
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
         //Session::flash('error', $validator->errors()->getMessages());
            // return redirect()->back()->with('errorForm', $validator->errors()->getMessages())->withInput();
            return redirect()->back()->withErrors($validator)->with('errorForm', $validator->errors()->getMessages())->withInput();
        }
        try {
            //3/3- Si la validacion es correcta se crea el registro

            $user = new User;
            $user->name = $request->get('name');
            $user->apellido = $request->get('apellido');
            $user->telefono = $request->get('telefono');
            $user->puesto = $request->get('puesto');
            $user->id_empresa = $request->get('id_empresa');
            $user->id_sucursal = $request->get('id_sucursal');
            $user->email = $request->get('email');
            $user->calle = $request->get('calle');
            $user->password = Hash::make($request->password);

            if ($request->hasFile("firma")) {
                $file = $request->file('firma');
                $path = public_path() . '/firma';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $user->firma = $fileName;
            }

            if ($request->hasFile("foto")) {

                $imagen = $request->file("foto");
                $path = public_path() . '/foto';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $user->foto = $fileName;
            }

            $user->alta = $request->get('alta');
            $user->baja = $request->get('baja');
            $user->enfermedad = $request->get('enfermedad');
            $user->alergias = $request->get('alergias');
            $user->seguro_social = $request->get('seguro_social');
            $user->estado_civil = $request->get('estado_civil');
            $user->estudios = $request->get('estudios');
            $user->contratacion = $request->get('contratacion');
            $user->personal = $request->get('personal');
            $user->jornada = $request->get('jornada');
            $user->rotacion_turnos = $request->get('rotacion_turnos');
            $user->tiempo_puesto = $request->get('tiempo_puesto');
            $user->experiencia = $request->get('experiencia');
            $user->departamento = $request->get('departamento');
            $user->nombre_emergencia = $request->get('nombre_emergencia');
            $user->telefono_emergencia = $request->get('telefono_emergencia');
            $user->save();

            $user->assignRole($request->input('roles'));

            $vi_elemento = new ViElemento;
            $vi_elemento->id_user = $user->id;
            $vi_elemento->save();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->back();
        } catch (\Exception $e) {
         //Session::flash('error', $validator->errors()->getMessages());
         return redirect()->back()
         ->with('errorForm', $validator->errors()->getMessages())
          ->withInput();
        }
    }
    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        $roles = Role::pluck('name','name')->all();

        $userRole = $usuario->roles->pluck('name','name')->all();

        $empresa = DB::table('users')
            ->where('empresa', '=', 1)
            ->get();

        $sucursal = DB::table('users')
            ->where('empresa', '=', 2)
            ->get();

        return view('admin.usuarios.edit', compact('empresa', 'sucursal', 'usuario','userRole','roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->apellido = $request->get('apellido');
        $user->telefono = $request->get('telefono');
        $user->puesto = $request->get('puesto');
        $user->id_empresa = $request->get('id_empresa');
        $user->id_sucursal = $request->get('id_sucursal');
        $user->calle = $request->get('calle');
        $user->email = $request->get('email');

        if ($request->hasFile("firma")) {
            $file = $request->file('firma');
            $path = public_path() . '/firma';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $user->firma = $fileName;
        }

        if ($request->hasFile("foto")) {
            $file = $request->file('foto');
            $path = public_path() . '/foto';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $user->foto = $fileName;
        }

        $user->alta = $request->get('alta');
        $current = Carbon::now()->toDateString();
        if ($request->get("baja")) {
            $user->baja = $current;
        }
        $user->enfermedad = $request->get('enfermedad');
        $user->alergias = $request->get('alergias');
        $user->seguro_social = $request->get('seguro_social');
        $user->estado_civil = $request->get('estado_civil');
        $user->estudios = $request->get('estudios');
        $user->contratacion = $request->get('contratacion');
        $user->personal = $request->get('personal');
        $user->jornada = $request->get('jornada');
        $user->rotacion_turnos = $request->get('rotacion_turnos');
        $user->tiempo_puesto = $request->get('tiempo_puesto');
        $user->experiencia = $request->get('experiencia');
        $user->departamento = $request->get('departamento');
        $user->nombre_emergencia = $request->get('nombre_emergencia');
        $user->telefono_emergencia = $request->get('telefono_emergencia');
        $user->update();

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        // Redireccion  de suuces or fail dependiedno el caso
        Session::flash('edit', 'Se ha guardado sus datos con exito');
        return redirect()->back();

    }

    public function update_usuario_password(Request $request, $id)
    {
        $validator = $this->validate($request, [
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::findOrFail($id);

        $pass = $user->password = $request->password;
        $user->password = Hash::make($pass);
        $user->update();

        Session::flash('edit', 'Se ha actualizado su contrasena con exito');
        return redirect()->route('index.usuario');
    }
}
