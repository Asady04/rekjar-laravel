<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to import your User model

class UserController extends Controller
{
    public function assistant()
    {
        // Option 1: Fetch a specific user by ID (e.g., user with ID 1)
        $user = User::find(1);

        // Option 2: Fetch the first user found in the database
        // $user = User::first();

        // Option 3: Handle case where no user is found (e.g., redirect or show a default)
        if (!$user) {
            // You might want to handle this gracefully, e.g.,
            // return redirect('/login')->with('error', 'User not found.');
            // For now, let's just create a dummy user if none exists for demo
            $user = new User();
            $user->name = 'Guest User';
            $user->email = 'guest@example.com';
        }

        // Pass the user data to the view
        return view('assistant', compact('user'));
    }

    public function praktikan()
    {
        $user = User::orderBy('id', 'asc')
            ->skip(1)
            ->take(1)
            ->first();

        if ($user) {
            return view('praktikum', compact('user'));
        } else {
            $user = new User();
            $user->name = 'Guest User';
            $user->email = 'guest@example.com';
        }
    }
}
