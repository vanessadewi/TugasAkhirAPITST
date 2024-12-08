<?php
// api.php

// URL API Laravel
$apiUrl = 'http://localhost:8000/api/members';  // Pastikan URL sesuai dengan server API Laravel

// Mengambil data anggota menggunakan cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Mengecek apakah respons API berhasil
if ($response === false) {
    echo "Gagal mengambil data.";
    exit;
}

// Decode JSON response
$members = json_decode($response, true);
?>
