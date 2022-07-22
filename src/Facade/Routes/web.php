<?php

use Illuminate\Support\Facades\Route;
use App\Services\Service as S;

Route::get('/', function () {
    $service = new S();
    $message = $service->getMessage();
    return response($message);
});

Route::get('/ioc', function (S $service) {
    $message = $service->getMessage();
    return response($message);
});

Route::get('/ioc2', function () {
    $message = resolve(S::class)->getString();
    return response($message);
});

Route::get('/bind', function () {
    $message = app('service')->getMessage();
    return response($message);
});

Route::get('/facade', function () {
    $message = Service::getMessage();
    return response($message);
});

Route::get('/users', function () {
    $users = DB::table('users')->get();
    dd($users->toArray());
});