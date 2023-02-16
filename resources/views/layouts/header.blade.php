<div class="flex justify-between py-4 bg-slate-700">
    <div class="flex px-8 space-x-3 items-center">
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        <a class="text-xl text-white" href="{{ route('home') }}">Laravel 10</a>
    </div>
    <div class="px-8">
        <ul class="flex space-x-4 text-xl text-slate-400">
            <li><a href="{{ route('help') }}">help</a></li>
            <li><a href="{{ route('about') }}">about</a></li>
        </ul>
    </div>
</div>