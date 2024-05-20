<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Main Page');
});

Route::get('/about', function () {
    return ('About Page');
})->name('about');

Route::get('/test/{id}', function (int $id) {
    return ('Test page with id: ' . $id);
})->name('test');

Route::get('/tst', function () {
    return redirect()->route('test', ['id' => 1]);
});
