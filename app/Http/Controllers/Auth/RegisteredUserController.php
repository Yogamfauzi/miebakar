<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View; // Tambahkan impor View

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input pengguna
        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // default role untuk admin
            'alamat' => null,
        ]);

        // Trigger event Registered
        event(new Registered($user));

        // Redirect ke halaman login
        return redirect()->route('login')->with('status', 'Pendaftaran berhasil, silakan login.');
    }
}
