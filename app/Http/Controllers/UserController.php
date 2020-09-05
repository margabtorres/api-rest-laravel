<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller     //una api es una 
{
    public function pruebas(Request $request){
        return "Accion de pruebas de UserController";
        return "Accion de pruebas de UserController";
    }

    
    public function register(Request $request){
        //Recoger los datos del usuario por POST
        $json = $request->input('json', null);
        $params = json_decode($json);           //objeto
        $params_array = json_decode($json, true);   //array

        // var_dump($params_array);
        // die();

        //Validar los datos
        $validate = \Validator::make($params_array, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if($validate->fails()){
            //validacion fallida
            
            $data = array(
                'status'=>'error',
                'code'=>404,
                'message'=>'El usuario no se creo correctamente',
                'errors'=>$validate->errors()
            );
        }else{
            //validacion correcta
            $data = array(
                'status'=>'success',
                'code'=>200,
                'message'=>'El usuario se ha creado correctamente'
            );

        }
        
        // Cifrar contraseña

        //Comprobar si el usuario existe (para no duplicar)
        
        //Crear el usuario

        //Mostrar mensajes
        return response()->json($data, $data['code']);
        die();
    }

    public function login(Request $request){
        return "Login de usuario";
    }
}
