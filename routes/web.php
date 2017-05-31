<?php
Route::resource('atores', 'AtorController');
Route::resource('filmes', 'FilmeController');
Route::resource('generos', 'GeneroController');
Route::resource('home', 'HomeController');
Route::resource('login', 'LoginController');
Auth::routes();

Route::get('/', 'HomeController@inicio');
