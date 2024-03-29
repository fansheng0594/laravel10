<x-app-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="m-8 p-4 bg-gray-300">
        <h1 class="text-4xl font-bold text-gray-600">Hello Laravel</h1>
        <p class="mt-3 text-2xl text-gray-500">
            <a class="text-blue-400" href="https://laravel.com">Laravel 10</a>
            <span> already coming!</span>
        </p>
        <p class="mt-3 text-xl text-gray-400">Start learning</p>

        @guest
            <button class="mt-3 p-2 rounded-lg text-gray-200 shadow-sm bg-green-400 ">
                <a href="{{ route('signup.store') }}">Signup</a>
            </button>
        @endguest
    </div>
</x-app-layout>
