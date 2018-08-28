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
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

// Правило для главной страницы сайта
Route::get('/', function () {
    return view('index')->with('description', 'Moderna - Главная страница')
                        ->with('title', 'Moderna - Главная страница');
});

/*
 * Альтернативное написание того же самого правила для главной страницы сайта:
Route::get('/', function () {
    return view('index', ['description' => 'Moderna - Главная страница', 
                            'title' => 'Moderna - Главная страница']);
});

Route::get('/', function () {
    $data = array('description' => 'Moderna - Главная страница', 
                  'title' => 'Moderna - Главная страница');
    return view('index', $data);
});*/

// Правило для других страниц сайта
Route::get('/{page}', function ($page) {
    $data = array('description' => 'Moderna - ' . $page, 
                  'title' => 'Moderna - ' . $page);
    return view($page, $data);
});