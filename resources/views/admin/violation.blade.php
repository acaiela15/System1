<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Violation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Manage Violations</h3>
                    <p>This page allows you to view and manage violations reported in the system.</p>

                    <!-- Example list of violations -->
                    <div class="mt-6 space-y-4">
                        <h4 class="font-semibold">Reported Violations</h4>
                        <ul>
                            <li>Violation ID: 1 - User: User 1 - Reason: Spam</li>
                            <li>Violation ID: 2 - User: User 2 - Reason: Inappropriate Content</li>
                        </ul>
                    </div>

                    <!-- Optionally, you could add functionality to resolve or remove violations -->
                    <div class="mt-6">
                        <form method="POST" action="{{ route('admin.violation') }}">
                            @csrf
                            <div class="mt-4">
                                <label for="violation_id" class="block">Select Violation:</label>
                                <select id="violation_id" name="violation_id" class="w-full p-2 border rounded">
                                    <option value="">Select a violation</option>
                                    <!-- Dynamically add violation options here -->
                                    <option value="1">Violation 1</option>
                                    <option value="2">Violation 2</option>
                                </select>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="bg-red-500 text-white p-2 rounded">Resolve Violation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
