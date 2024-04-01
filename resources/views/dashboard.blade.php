<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">{{ __('Logout') }}</button>
    </form>
</x-app-layout>

