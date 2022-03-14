<?php

Route::get('/', 'Monitec@index');
Route::get('/inicio', 'inicio@inicio');
Route::get('/perfil', 'Monitec@perfil');
Route::get('/editar', 'Monitec@editar');

Route::get('/pagina', 'Monitec@pagina');
Route::get('/perfil/1ano', 'Monitec@umano');
Route::get('/perfil/2ano', 'Monitec@doisano');
Route::get('/perfil/3ano', 'Monitec@tresano');
    
Route::get('/admin', 'AdminController@index')->name('admin dashbord');
Route::post('/perfil/imagem', 'imagemControlador@store');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/editar', 'monitec@update_avatar');


Auth::routes();

Route::post('/submit', 'ContactController@submit');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'PostControlador@perfil');
Route::get('/perfil', 'imagemControlador@imagem');
Route::post('/perfil', 'PostControlador@store');
Route::post('/perfil/imagem', 'imagemControlador@store');

Route::delete('/arquivo/{id}', 'PostControlador@destroy')->name('delete');

Route::get('/perfil/download/{id}', 'PostControlador@download');


// Monitorias //

//1 ano//
Route::get('/perfil/umano/cap1', 'Monitec@umanocap1');
Route::get('/perfil/umano/cap2', 'Monitec@umanocap2');
Route::get('/perfil/umano/cap3', 'Monitec@umanocap3');
Route::get('/perfil/umano/cap4', 'Monitec@umanocap4');
Route::get('/perfil/umano/cap5', 'Monitec@umanocap5');

//2 ano//
Route::get('/perfil/doisano/cap1', 'Monitec@doisnocap1');
Route::get('/perfil/doisano/cap2', 'Monitec@doisnocap2');
Route::get('/perfil/doisano/cap3', 'Monitec@doisnocap3');
Route::get('/perfil/doisano/cap4', 'Monitec@doisnocap4');
Route::get('/perfil/doisano/cap5', 'Monitec@doisnocap5');
Route::get('/perfil/doisano/cap6', 'Monitec@doisnocap6');
Route::get('/perfil/doisano/cap7', 'Monitec@doisnocap7');
Route::get('/perfil/doisano/cap8', 'Monitec@doisnocap8');

//3 ano//
Route::get('/perfil/tresano/cap1', 'Monitec@tresnocap1');
Route::get('/perfil/tresano/cap2', 'Monitec@tresnocap2');
Route::get('/perfil/tresano/cap3', 'Monitec@tresnocap3');
Route::get('/perfil/tresano/cap4', 'Monitec@tresnocap4');
Route::get('/perfil/tresano/cap5', 'Monitec@tresnocap5');
