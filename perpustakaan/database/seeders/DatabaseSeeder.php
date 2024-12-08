<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book; // Import the model
use App\Models\Member; // Import the model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publication_year' => 1960,
            'genre' => 'Fiction',
            'stock' => 12,
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'publication_year' => 1949,
            'genre' => 'Dystopian',
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Moby Dick',
            'author' => 'Herman Melville',
            'publication_year' => 1903,
            'genre' => 'Adventure',
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'publication_year' => 1902,
            'genre' => 'Romance',
            'stock' => 15,
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publication_year' => 1925,
            'genre' => 'Tragedy',
            'stock' => 9,
        ]);

        Book::create([
            'title' => 'War and Peace',
            'author' => 'Leo Tolstoy',
            'publication_year' => 1950,
            'genre' => 'Historical',
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'publication_year' => 1951,
            'genre' => 'Coming-of-Age',
            'stock' => 7,
        ]);

        Member::insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'phone' => '1234567890',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'phone' => '0987654321',
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie@example.com',
                'phone' => '1122334455',
            ],
            [
                'name' => 'Diana Prince',
                'email' => 'diana@example.com',
                'phone' => '2233445566',
            ],
            [
                'name' => 'Eve Adams',
                'email' => 'eve@example.com',
                'phone' => '3344556677',
            ],
        ]);
    }

}
