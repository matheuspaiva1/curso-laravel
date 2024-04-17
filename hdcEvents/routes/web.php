<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Matheus';
    $idade = 19;
    $profissao = 'Programador';

    $arr = [10,20,30,40,50];

    $nomes = ['joaquim', 'maria', 'josé'];


    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade, 
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});