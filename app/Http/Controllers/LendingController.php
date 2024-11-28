<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use App\Http\Requests\LendingRequest;
use Illuminate\Http\Request;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralColectionResource;

class LendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lendings = Lending::all();
        return new GeneralColectionResource($lendings, 'Peminjaman ditemukan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LendingRequest $request)
    {
        $validate = $request->validated();
        $lendings = Lending::create($validate);
        return new GeneralResource($lendings, 'Peminjaman berhasil ditambahkan', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lending $lending)
    {
        return new GeneralResource($lending, 'Peminjaman ditemukan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LendingRequest $request, Lending $lending)
    {
        $request->validated();
        $lending->update($request->except('user_id', 'book_id'));
        return new GeneralResource($lending, 'Peminjaman berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lending $lending)
    {
        $success = $lending->delete();
        if ($success) {
            return new GeneralResource($lending, 'Buku Berhasil di hapus', );
        } else {
            return new GeneralResource($lending, 'Buku Gagal di hapus', 400);
        }
    }
}
