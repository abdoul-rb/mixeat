<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.teams.index',[
            'users' => User::all()
        ]);
    }

    public function create() {
        return view('dashboard.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'poste' => 'string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'string',
            'password' => 'required|string|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'poste' => $request->poste,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('dashboard.teams.index');
    }

    public function edit(User $user)
    {
        return view('dashboard.teams.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'poste' => 'string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'string',
            'password' => 'required|string|confirmed'
        ]);

        $user->update([
            'name' => $request->name,
            'poste' => $request->poste,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('dashboard.teams.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.teams.index')->with('success', 'User is deleted.');
    }
}
