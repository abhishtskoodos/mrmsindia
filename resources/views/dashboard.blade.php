<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <a href="{{ route('event.index') }}">Event</a>
                  <a href="{{ route('category.index') }}">category</a>
                  <a href="{{ route('celebrity.index') }}">Celebrity</a>
                  <a href="{{ route('guest.index') }}">guest</a>
                  <a href="{{ route('modal.index') }}">Modal</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
