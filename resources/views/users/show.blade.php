<x-app-layout>
    <x-slot:title>show</x-slot:title>

    <div class="w-1/2 bg-slate-200">
        <div>
            username: {{ $user->name }}
            email: {{ $user->email }}
        </div>
    </div> 
</x-app-layout>