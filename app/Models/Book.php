<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'overview',
        'read_time',
        'release_date',
        'image_url'
    ];

    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn($image_url) => url('/storage/' . $image_url),
        );
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function lendings()
    {
        return $this->hasMany(Lending::class);
    }
}
