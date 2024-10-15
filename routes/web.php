<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'OK'
    ]);
});


//dentro do somar
if (count($request->all()) < 1){
    return response()->json([
        'message'=> 'Não há valores para somar.'
    ], 406);
}