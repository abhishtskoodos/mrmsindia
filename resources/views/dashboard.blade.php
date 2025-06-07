<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                
                <a href="{{ route('event.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Event</h2>
                </a>
    
                <a href="{{ route('category.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Category</h2>
                </a>
    
                <a href="{{ route('celebrity.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Celebrity</h2>
                </a>
    
                <a href="{{ route('guest.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Guest</h2>
                </a>
    
                <a href="{{ route('modal.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Modal</h2>
                </a>
    
                <a href="{{ route('pageantsubtitlem.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Pageant Subtitle Male</h2>
                </a>
    
                <a href="{{ route('pageantsubtitlef.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Pageant Subtitle Female</h2>
                </a>

                <a href="{{ route('contact.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Contact</h2>
                </a>

                <a href="{{ route('media.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Media</h2>
                </a>

                <a href="{{ route('faq.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Faqs</h2>
                </a>

                <a href="{{ route('mediacoverage.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Media Coverage</h2>
                </a>

                <a href="{{ route('values.index') }}" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold text-gray-800">Basic Data</h2>
                </a>
    
                <!-- Add more cards here if needed -->
                
            </div>
        </div>
    </div>
    
</x-app-layout>
