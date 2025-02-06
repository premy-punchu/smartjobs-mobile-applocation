<?php

namespace App\Http\Controllers;
use App\Models\Useremail;


class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        // Create a new user record in the database
        $Useremail = Useremail::create([
            'email' => $validated['email'],
        ]);

        return response()->json(['message' => 'User saved successfully!', 'Useremail' => $Useremail], 200);
    }
}

