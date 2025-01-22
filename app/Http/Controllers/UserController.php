<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Logic for displaying a list of resources
    }

    public function create()
    {
        // Logic for showing a create form
    }

    public function store(Request $request)
    {
        // Logic for storing a newly created resource
    }

    public function show(string $id)
    {
        // Logic for displaying a specific resource
    }

    public function edit(string $id)
    {
        // Logic for showing an edit form
    }

    public function update(Request $request, string $id)
    {
        // Logic for updating a specific resource
    }

    public function destroy(string $id)
    {
        // Logic for deleting a specific resource
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|same:password_confirmation',
    ]);

    // Hash the password before saving
    $validatedData['password'] = Hash::make($validatedData['password']);

    try {
        User::create($validatedData);

        // Return back with a success message
        return back()->with('success', 'Registrasi berhasil! Silakan login.');
    } catch (\Exception $e) {
        // Redirect back with an error message
        return back()->with('error', 'Registrasi gagal: ' . $e->getMessage());
    }
}

public function loginStore(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt login
    if (auth()->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
        // Login berhasil
        return redirect()->route('dashboard')->with('success', 'Login berhasil!');
    } else {
        // Login gagal
        return back()->with('error', 'Email atau password salah!');
    }
}

}
