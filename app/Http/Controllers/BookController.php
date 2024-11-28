<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\BookRequest;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralColectionResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return new GeneralColectionResource($book, 'Buku ditemukan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $validated['image_url'] = $image->store('bookImg', 'public');
            unset($validated['image']);
        }

        $book = Book::create($validated);

        return new GeneralResource($book, 'Buku Berhasil di tambahkan', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book['image_url'] = $book->image_url;
        return new GeneralResource($book, 'Buku ditemukan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return new GeneralResource($book, 'Buku Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $success = $book->delete();

        if ($success) {
            return new GeneralResource($book, 'Buku Berhasil di hapus', );
        } else {
            return new GeneralResource($book, 'Buku Gagal di hapus', 400);
        }
    }
}
