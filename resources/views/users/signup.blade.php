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
                <x-forms.input name="name" type="text" />    
                <x-forms.input name="email" type="text" />    
                <x-forms.input name="password" type="password" />    
                <x-forms.input name="password_confirmation" type="password" />    
                {{-- <button class="py-1 mx-8 bg-blue-500 rounded-md text-gray-200 text-lg shadow-md">register</button> --}}
                <x-forms.button type="submit" class="py-1 mx-8 bg-blue-500 rounded-md text-gray-200 text-lg shadow-md">
                    register
                </x-forms.button>
           </form>
        </div>
    </div>
@endsection