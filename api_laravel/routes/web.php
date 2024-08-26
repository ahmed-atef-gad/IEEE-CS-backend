<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($name) {
    $filename = 'names.txt';

    $name = trim($name);

    if (!Storage::exists($filename)) {
        Storage::put($filename, '');
    }

    $names = array_map('trim', explode("\n", trim(Storage::get($filename))));

    if (in_array($name, $names)) {
        return "Hello again, {$name}!";
    } else {
        Storage::append($filename, $name);
        return "Hello, {$name}!";
    }
});


Route::get('/names', function () {
    $filename = 'names.txt';

    if (!Storage::exists($filename) || trim(Storage::get($filename)) == '') {
        return response("No names found.")->header('Content-Type', 'text/plain');
    }

    $names = explode("\n", trim(Storage::get($filename)));
    return response(implode("\n", $names))->header('Content-Type', 'text/plain');
});
