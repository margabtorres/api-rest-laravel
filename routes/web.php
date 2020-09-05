<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-orm', 'Controller@testOrm');

/* Metodos HTTP comunes
    *   GET: Conseguir datos o recursos
    *   POST: guardar datos o recursos o hacer logica y devolverla
    *   PUT:    Actualizar recuros o datos
    *   DELETE: Eliminar datos o recursos
*/

//rutas de prueba
Route::get('/usuario/pruebas', 'UserController@pruebas');
Route::get('/categoria/pruebas', 'CategoryController@pruebas');
Route::get('/entrada/pruebas', 'PostController@pruebas');

//rutas del controlador de usuario
/*  PARA ACCEDER A RUTAS POR POST ES NECESARIO HACERLAS DESDE CLIENTE POSTMAN O FOMULARIO
    NO SE PUEDE ACCEDER DIRECTAMENTE COMO CON GET POR MEDIO DEL NAVCEGADOR DIRECTAMENTE
*/
Route::post('/api/register', 'UserController@register');  //guardar un usuario en la BD
Route::post('/api/login', 'UserController@login');  //Ingreso de un usuario en la BD

