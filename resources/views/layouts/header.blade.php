<div class="flex justify-between py-4 bg-slate-700">
    <div class="flex px-8 space-x-3 items-center">
        <x-application-logo class="w-8 h-8" />
        <a class="text-xl text-white" href="{{ route('home') }}">Laravel 10</a>
    </div>
    <div class="flex px-8 items-center">
        <ul class="flex space-x-4 text-xl text-slate-400">
            <li><a href="{{ route('help') }}">help</a></li>
            <li><a href="{{ route('about') }}">about</a></li>
        </ul>
        @guest
            <ul class="flex space-x-4 text-xl text-slate-400 sm:ml-6">
                <li><a href="{{ route('signup') }}">signup</a></li>
                <li><a href="{{ route('signin') }}">signin</a></li>
            </ul>
        @endguest
        <!--User Settings Dropdown -->
        @auth
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-slate-700 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="#">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link href="#"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @endauth
    </div>

</div>
