<x-app-layout>
    <x-slot name="title">
        Dashboard | Broom.id
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome Back, ') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- if admin is available --}}
                @auth
                    @if (auth()->user()->name === 'Administrator')
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <a href="/admin" class="">ADMIN CLICK HERE</a>
                        </div>
                    @else
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("You're logged in!") }}
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
