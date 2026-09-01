<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->isbn13(),
            'title' => mb_convert_case(fake()->words(4, true), MB_CASE_TITLE),
            'description' => fake()->paragraph(),
            'author' => fake()->name(),
            'publication_date' => fake()->date(),
        ];
    }
}
