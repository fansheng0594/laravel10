<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function create(): View
    {
        return view('users.signup');
    }

    public function show(User $user): View
    {   
        return view('users.show', ['user' => $user]); 
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $user = User::create($request->input());
        return to_route('users.show', ['user' => $user]);
    }

    public function signin(Request $request)
    {
        
    }
}
