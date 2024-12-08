<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Method untuk menampilkan semua anggota dalam bentuk JSON
    public function index()
    {
        $members = Member::all(); // Ambil semua data anggota
        return response()->json($members); // Kembalikan dalam format JSON
    }

    // Method untuk menampilkan satu anggota berdasarkan ID dalam bentuk JSON
    public function show($id)
    {
        $member = Member::find($id); // Cari anggota berdasarkan ID
        if ($member) {
            return response()->json($member); // Kembalikan data anggota dalam format JSON
        }
        return response()->json(['message' => 'Member not found'], 404); // Jika anggota tidak ditemukan
    }
}
