<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Display success message if available -->
                    @if (session('success'))
                        <div class="mt-4 p-4 bg-green-500 text-white rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <!-- Button to create a new subject -->
                    <div class="flex justify-end">
                        <a href="{{ route('subjects.create') }}" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white font-bold rounded">
                            Create New Subject
                        </a>
                    </div>

                    <h3 class="mt-4 text-lg font-bold">Subject List</h3>
                    <ul class="mt-2">
                        @foreach ($subjects as $subject)
                            <li>Code: {{ $subject->code }} --- Name: {{ $subject->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
