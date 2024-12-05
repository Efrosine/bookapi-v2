<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralColectionResource;

class UserLendingsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($user_id)
    {

        $lendings = Lending::with('book')->where('user_id', $user_id)->get();

        // Jika tidak ada lendings, kembalikan pesan kosong
        if ($lendings->isEmpty()) {
            return new GeneralResource(null, 'Lendings not found', 404);
        }

        // Kembalikan hasil dalam format JSON
        return new GeneralColectionResource($lendings, 'Lendings found');
    }
}
