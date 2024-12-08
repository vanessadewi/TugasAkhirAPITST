<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Member;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', function () {
    $books = Book::all();
    return view('books', compact('books'));
});

Route::get('/members', function () {
    $members = Member::all();
    return view('members', compact('members'));
});
