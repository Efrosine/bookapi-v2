<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;

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
            return response()->json([
                'success' => false,
                'message' => 'No lendings found for this user',
            ], 404);
        }

        // Kembalikan hasil dalam format JSON
        return response()->json([
            'success' => true,
            'data' => $lendings,
        ]);
    }
}
