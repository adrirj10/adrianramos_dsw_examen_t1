<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});

//borrar
Route::get('/messages/borrar', [MessagesController::class, 'borrar'])->name('messages.borrar');
Route::delete('/messages/{id}', [MessagesController::class, 'destroy'])->name('messages.destroy');
