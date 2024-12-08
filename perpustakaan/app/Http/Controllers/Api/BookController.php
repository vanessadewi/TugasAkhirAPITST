<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Method untuk menampilkan semua buku dalam bentuk JSON
    public function index()
    {
        $books = Book::all(); // Ambil semua data buku
        return response()->json($books); // Kembalikan dalam format JSON
    }

    // Method untuk menampilkan satu buku berdasarkan ID dalam bentuk JSON
    public function show($id)
    {
        $book = Book::find($id); // Cari buku berdasarkan ID
        if ($book) {
            return response()->json($book); // Kembalikan data buku dalam format JSON
        }
        return response()->json(['message' => 'Book not found'], 404); // Jika buku tidak ditemukan
    }
}
