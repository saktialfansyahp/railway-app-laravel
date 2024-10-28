<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required|email',
            'password' => 'string|required',
            'password_confirm' => 'string|required'
        ]);

        if ($data['password'] !== $data['password_confirm']) {
            return response()->json(['Password confirm not suitable'], 400);
        }

        try {
            $user = User::create([
                "name" => $data["name"],
                "email" => $data["email"],
                "password" => hash('sha256', $data["password"]),
            ]);

            return response()->json([$user], 200);
        } catch (Exception $e) {
            return $e;
        }
    }
}
