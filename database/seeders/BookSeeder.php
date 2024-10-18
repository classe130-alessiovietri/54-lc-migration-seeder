<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        // $books = [
        //     [
        //         'title' => '1984',
        //         'author' => 'George Orwell',
        //         'year' => 1948,
        //     ],
        //     [
        //         'title' => 'La Fattoria degli Animali',
        //         'author' => 'George Orwell',
        //         'year' => 1952,
        //     ],
        // ];

        // foreach ($books as $bookData) {
        //     $book = new Book();
        //     $book->title = $bookData['title'];
        //     $book->author = $bookData['author'];
        //     $book->year = $bookData['year'];
        //     $book->save();
        // }

        for ($i = 0; $i < 100; $i++) {
            $book = new Book();
            $book->title = fake()->words(rand(1, 5), true);
            $book->author = fake()->name();
            $book->year = fake()->year();
            if (rand(0, 1)) {
                $book->genre = fake()->words(rand(1, 2), true);
            }
            $book->published = fake()->boolean(80);
            $book->save();
        }
    }
}
