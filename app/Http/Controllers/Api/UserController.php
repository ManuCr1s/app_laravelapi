<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\PersonRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Person;
use Illuminate\Support\Facades\Hash;
use Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    { 
        $person = Person::create([
            'dni' => $request->dni,
            'apellido_paterno'=> $request->apellido_paterno,
            'apellido_materno'=> $request->apellido_materno,
            'nombres' => $request->nombres,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'id_region' => $request->id_region,
            'id_province' => $request->id_province,
            'id_districts' => $request->id_districts,  
        ]);
        $user = User::create([
            'dni' => $request->dni,
            'password' => Hash::make($request->dni),
            'id_rol'=> $request->id_rol
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data'=>$user,'access_token'=>$token,'token_type'=>'Bearer']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'dni' => 'required|string|size:8',
            'password' => 'required|string|min:8'
        ]);
        if($validate->fails()) return response()->json($validate->errors());
        if(!Auth::attempt(['dni'=>$request->dni,'password'=>$request->password])) return response()->json(['message'=>'Unauthorized'],401);
        $user = User::where('dni',$request->dni)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => $user->name,
            'accessToken' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
