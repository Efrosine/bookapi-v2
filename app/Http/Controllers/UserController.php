<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\GeneralColectionResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return new GeneralColectionResource($user, 'User ditemukan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // $data = $request->all();
        // $data['password'] = bcrypt($data['password']);
        // $user = User::create($data);

        // return new GeneralResource($user, 'User berhasil di tambahkan', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new GeneralResource($user, 'User ditemukan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $success = $user->delete();

        if ($success) {
            return new GeneralResource($user, 'User berhasil di hapus');
        } else {
            return new GeneralResource($user, 'User gagal di hapus', 400);
        }
    }

    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');
        if (!Auth::attempt($credential)) {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Login gagal, krendensial salah.'
            ], 401);
        }

        $user = Auth::user();

        $user->tokens()->delete();

        $token = $user->createToken('authToken', [$user->role], )->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil.',
            'data' => [
                'token' => $token,
                'id' => $user->id,
                'role' => $user->role
            ]
        ], 201);
    }

    public function register(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return new GeneralResource($user, 'User berhasil di tambahkan', 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil.'
        ], 200);
    }
}
