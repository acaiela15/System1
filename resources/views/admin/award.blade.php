<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Award Certificate') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Award New Certificates</h3>
                    <p>This page allows you to award certificates to users for their achievements.</p>

                    <!-- Form to award a certificate -->
                    <form method="POST" action="{{ route('admin.award') }}">
                        @csrf
                        <div class="mt-4">
                            <label for="user_id" class="block">Select User:</label>
                            <select id="user_id" name="user_id" class="w-full p-2 border rounded">
                                <option value="">Select a user</option>
                                <!-- Add user options dynamically here -->
                                <option value="1">User 1</option>
                                <option value="2">User 2</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Award Certificate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
