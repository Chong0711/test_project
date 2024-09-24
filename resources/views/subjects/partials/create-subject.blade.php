<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Subject') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('subjects.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Subject Name</label>
                            <input type="text" name="name" id="name" class="w-full p-2 border rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="code" class="block text-gray-700">Subject Code</label>
                            <input type="text" name="code" id="code" class="w-full p-2 border rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700">Description</label>
                            <textarea name="description" id="description" class="w-full p-2 border rounded"></textarea>
                        </div>

                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-bold rounded">
                            Create Subject
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
