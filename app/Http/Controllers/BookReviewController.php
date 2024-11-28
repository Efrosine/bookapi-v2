<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralColectionResource;
class BookReviewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($book_id)
    {
        $reviews = Review::with('user')
            ->where('book_id', $book_id)
            ->get();

        if ($reviews->isEmpty()) {
            return new GeneralResource(null, 'Review tidak ditemukan', 404);
        }

        return new GeneralColectionResource($reviews, 'Review ditemukan');
    }
}
