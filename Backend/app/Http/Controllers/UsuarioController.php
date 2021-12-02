<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UsuarioResource;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UsuarioController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    /* public function getAuthenticatedUser()
    {
    try {
        if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
        }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    } */

    public function index()
    {
        $user= User::all();
        return $user;
    }

    public function create()
    {
        //
    }
    public function register(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'id_rol' => 'required|integer',
            'id_estado_usuario' => 'required|integer',
            'ci' => 'required|integer',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'id_rol' => $request->get("id_rol"),
            'id_estado_usuario' => $request->get('id_estado_usuario'),
            'ci' => $request->get('ci'),
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }


    public function store(Request $request)
    {
        $user= new User();
        $user->id_rol=$request->id_rol;
        $user->id_estado_usuario=$request->id_estado_usuario;
        
        $user->ci=$request->ci;
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){
            return response()->json([
                'message'=>"guardado",
                'user'=>$user
            ],201);
        }
        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UsuarioResource($user);
    }
    public function index1()
    {
        $data=DB::table('users')
            ->select('users.id', 'users.nombre', 'users.ci', 'users.apellido', 'users.email', 'users.password', 'roles.rol', 'estado_usuarios.estado')
        ->join('roles',"users.id_rol", "=", "roles.id")
        ->join('estado_usuarios',"users.id_estado_usuario", "=", "estado_usuarios.id")
        ->get();
        return $data;
    }

    public function edit($id)
    {
        $user=User::find($id);
        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->id_estado_usuario=$request->id_estado_usuario;

        $user->ci=$request->ci;
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->email=$request->email;
        $user->password = $request->password;

        if($user->save()){
            return new UsuarioResource($user);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->delete()){
            return new UsuarioResource($user);
        }
    }
}
