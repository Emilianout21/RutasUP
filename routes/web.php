<?php

use Illuminate\Support\Facades\Route;

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

require_once 'theme-routes.php';

Route::get('/dashboard', function () {
    return view('/pages/dashboard', ['title' => 'VacunApp | Dashboard']);
});

Route::get('/poblacion', function () {
    return view('/pages/poblacion', ['title' => 'RutasUp | Crear ruta']);
});

Route::get('/plan-ruta', function () {
    return view('/pages/rutas/route_planner', ['title' => 'RutasUp | Crear ruta']);
});


Route::get('/biblioteca', function () {
    return view('/pages/biblioteca', ['title' => 'VacunApp | Biblioteca']);
});

Route::get('/campanias', function () {
    return view('/pages/campanias', ['title' => 'VacunApp | Campañas']);
});

Route::get('/vigilancia', function () {
    return view('/pages/vigilancia', ['title' => 'VacunApp | Vigilancia']);
});

Route::get('/demandas', function () {
    return view('/pages/demandas', ['title' => 'VacunApp | Demandas']);
});

Route::get('/usuarios', function () {
    return view('/pages/usuarios', ['title' => 'VacunApp | Usuarios']);
});

