<?php
// Memanggil file api.php untuk mengambil data anggota
include 'apiMember.php';
include 'apiBook.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .member-list {
            margin: 0 auto;
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .member {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
        .member h3 {
            margin: 0;
            color: #333;
        }
        .member p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>Daftar Anggota Perpustakaan</h1>

    <div class="member-list">
        <?php
        // Menampilkan data anggota
        if (!empty($members)) {
            foreach ($members as $member) {
                echo "<div class='member'>";
                echo "<h3>" . $member['name'] . "</h3>";
                echo "<p>Email: " . $member['email'] . "</p>";
                echo "<p>Phone: " . $member['phone'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada anggota yang ditemukan.</p>";
        }
        
        if (!empty($books)) {
            echo '<h1>Daftar Buku</h1>';
            foreach ($books as $book) {
                echo "<div class='member'>";
                echo "<h3>" . $book['title'] . "</h3>";
                echo "<p>Author: " . $book['author'] . "</p>";
                echo "<p>Genre: " . $book['genre'] . "</p>";
                echo "<p>Year: " . $book['publication_year'] . "</p>";
                echo "<p>Stock: " . $book['stock'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada anggota yang ditemukan.</p>";
        }
        ?>
    </div>

</body>
</html>
