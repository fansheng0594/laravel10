<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SignupController extends Controller
{
    public function create(): View
    {
        return view('auth.signup');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $user = User::create($request->input());

        // TODO registered event FIXME

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
