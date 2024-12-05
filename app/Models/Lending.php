<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lending extends Model
{

    /** @use HasFactory<\Database\Factories\LendingFactory> */
    use HasFactory;
    protected $fillable = ['user_id', 'book_id', 'lent_at', 'status', 'returned_at', 'notes'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
