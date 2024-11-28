<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
            'title' => $this->faker->sentence(3), // Judul buku
            'author' => $this->faker->name(), // Nama penulis
            'publisher' => $this->faker->company(), // Penerbit
            'overview' => $this->faker->paragraph(), // Deskripsi
            'read_time' => $this->faker->randomElement(['2 hours', '4 hours', '1 day']), // Perkiraan waktu baca
            'release_date' => $this->faker->date(), // Tanggal rilis
            'image_url' => $this->faker->imageUrl(640, 480, 'books', true), // URL gambar
        ];
    }
}
