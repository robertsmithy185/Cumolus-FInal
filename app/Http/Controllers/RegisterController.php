<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Database\QueryException;

class RegisterController extends Controller
{
    public function showRegistrationForm(): View
    {
        return view('Register');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $existingUserByEmail = User::where('email', $request->input('email'))->first();
        if ($existingUserByEmail) {
            return redirect()->back()->withErrors(['email' => 'Email sudah digunakan.'])->withInput();
        }

        $existingUserByUsername = User::where('username', $request->input('username'))->first();
        if ($existingUserByUsername) {
            return redirect()->back()->withErrors(['username' => 'Username sudah digunakan.'])->withInput();
        }

        try {
            DB::transaction(function () use ($request) {
                User::create([
                    'username' => $request->input('username'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                ]);
            });

            return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.'])->withInput();
        }
    }
}



