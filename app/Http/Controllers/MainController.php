<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function user_room()
    {
        $lists = Task::orderby('id', 'desc')->get();
        return view('user.main', ['lists' => $lists]);
    }

    public function to_register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'login' => ['required', 'min:5'],
            'password' => ['required'],
        ]);
        

        $validated = new User();

        $validated->name = $request->name;
        $validated->email = $request->email;
        $validated->login = $request->login;
        $validated->password = Hash::make($request->password);

        Auth::login($validated);

        $validated->save();

        return redirect()->route('user.room');
    }

    public function to_login(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('user.room');
        }

        return back()->withErrors([
            'login' => 'error login',
        ])->onlyInput('login');
    }

    public function logout(Request $request )
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
}
