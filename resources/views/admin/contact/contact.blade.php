<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white shadow rounded p-6">
            <h3 class="text-lg font-semibold mb-4">Contact List</h3>

            @if($contacts->isEmpty())
                <p class="text-gray-600">No contacts found.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Email</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Contact No</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">City</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Query</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Created At</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->name }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->email }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->contact_no }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->city }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->query }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
