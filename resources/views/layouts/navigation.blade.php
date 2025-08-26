{{-- resources/views/layouts/navigation.blade.php --}}
@php($user = auth()->user())
<!-- Settings Dropdown -->
<div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md">
                <div>
                    @auth
                        {{ $user->name }}
                    @else
                        Conta
                    @endauth
                </div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414L10 13.414 5.293 8.707a1 1 0 010-1.414z"/></svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            @auth
                <!-- Logged-in menu -->
                <div class="block px-4 py-2 text-xs text-gray-400">Gerir conta</div>
                <x-dropdown-link href="{{ route('profile.show') }}">Perfil</x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Terminar sessão
                    </x-dropdown-link>
                </form>
            @else
                <!-- Guest menu -->
                <x-dropdown-link href="{{ route('login') }}">Entrar</x-dropdown-link>
                @if (Route::has('register'))
                    <x-dropdown-link href="{{ route('register') }}">Registar</x-dropdown-link>
                @endif
            @endauth
        </x-slot>
    </x-dropdown>
</div>
