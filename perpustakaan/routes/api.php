<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\MemberController;

Route::middleware('api')->get('/books', [BookController::class, 'index']);
Route::middleware('api')->get('/books/{id}', [BookController::class, 'show']);
Route::get('/members', [MemberController::class, 'index']);
Route::get('/members/{id}', [MemberController::class, 'show']);
