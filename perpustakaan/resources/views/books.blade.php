<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        /* Warna dominan pastel */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8e8f8; /* Pink pastel */
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #b0d4f1; /* Biru pastel */
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #91cbee;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            color: #333;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #e8f4fa; /* Biru pastel lebih terang */
            color: #333;
            padding: 15px;
            margin: 10px auto;
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        li:hover {
            background-color: #f4c1e9; /* Pink pastel terang */
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <header>
        <h1>Daftar Buku Perpustakaan</h1>
    </header>
    <main>
        <ul>
            @foreach ($books as $book)
                <li>
                    <strong>{{ $book->title }}</strong> <br>
                    <em>{{ $book->author }}</em>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
