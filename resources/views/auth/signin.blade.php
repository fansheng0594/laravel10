<x-guest-layout>
    <x-slot:title>Signin</x-slot:title>
    
    <form action="{{ route('signup.store') }}" method="POST">
        @csrf
        
        {{-- Email --}}
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" :value="old('email')" type="text" class="block mt-1 w-full"
                required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Password --}}
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('signup') }}">
                {{ __('Not registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Signin') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
