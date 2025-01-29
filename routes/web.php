<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function() {

    $ninjas = [

        ["name" => "Mario", "skill" => 75, "id" => "1"],
        ["name" => "Emmanuel", "skill" => 45, "id" => "2"],

    ];
    return view('ninjas.index', ["greeting" =>"Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function($id) {
    //
    return view('ninjas.show', ["id" => $id]);
});
