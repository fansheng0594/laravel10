<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(User $user): View
    {   
        $this->authorize('update', $user);
        return view('users.show', ['user' => $user]); 
    }

}
