@extends('layouts.app')

@section('title', 'signup')

@section('contents')
    <div class="mx-auto mt-8 w-1/4 border rounded-lg border-gray-400">
        <div class="py-3 border-b rounded-t-md border-gray-400 bg-gray-100">
            <span class="mx-8 text-2xl font-semibold">Signup</span>
        </div>
        <div class="py-4">
            <form class="flex flex-col space-y-3" action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="flex flex-col space-y-2 mx-8">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-input rounded-md border-gray-300">
                </div>

                <div class="flex flex-col space-y-2 mx-8">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-input rounded-md border-gray-300">
                </div>
                
                <div class="flex flex-col space-y-2 mx-8">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-input rounded-md border-gray-300">
                </div>

                <div class="flex flex-col space-y-2 mx-8">
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input rounded-md border-gray-300">
                </div>
                <button class="py-1 mx-8 bg-blue-500 rounded-md text-gray-200 text-lg shadow-md">register</button>

           </form>
        </div>
    </div>
@endsection