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

/*Route::get('/', function () {
    return view('layout.Principal');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/tecnologia', function () {
    return view('tecnologia');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/registrarse', function () {
    return view('registrarse');
});

Route::get('/ingresar', function () {
    return view('ingresar');
});

Route::get('/quimica', function () {
    return view('quimicaClinica');
});

Route::get('/registrolab', function () {
    return view('registroLab');
});

Route::get('/uro', function () {
    return view('uroanalisis');
});

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contacto/submit', 'MessagesController@submit');

Route::resource('usuario','UsuarioController');

Route::post('/responsable/create', 'UsuarioController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
