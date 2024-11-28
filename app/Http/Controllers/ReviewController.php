<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralColectionResource;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return new GeneralColectionResource($reviews, 'Review ditemukan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request)
    {
        $validated = $request->validated();
        $review = Review::create($validated);
        return new GeneralResource($review, 'Review berhasil ditambahkan', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return new GeneralResource($review, 'Review ditemukan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, Review $review)
    {

        $request->validated();

        $review->update($request->except('user_id', 'book_id'));
        return new GeneralResource($review, 'Review berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $success = $review->delete();
        if ($success) {
            return new GeneralResource($review, 'Review berhasil di hapus');
        } else {
            return new GeneralResource($review, 'Review gagal di hapus', 400);
        }
    }
}
