<?php
Route::get('/user/{type}', function ($type) {
    return "User type: {$type}";
})->whereIn('type', ['admin', 'customer', 'chef']);
