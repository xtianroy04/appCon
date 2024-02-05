<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);
    
        $validated['password'] = bcrypt($validated['password']);
    
        try {
            $user = User::create($validated);
            $staffRole = Role::where('name', 'staff')->first();
    
            if ($staffRole) {
                $user->roles()->attach($staffRole->id);
            }
    
            return redirect()->route('login')->with('success', 'Account created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the account. Please try again.');
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->roles->contains('name', 'staff')) {
                $request->session()->regenerate();
                return redirect()->intended(route('home'));
            } else {
                auth()->logout();
                return redirect()->back()->with('error', 'You do not have the required role to log in.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Logged out successfully.');
    }
}
