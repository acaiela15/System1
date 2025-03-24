<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <!-- Tailwind Flex Container for Horizontal Links -->
            <div class="space-x-6">
                <!-- Link to Overview -->
                <a href="{{ route('admin.overview') }}" 
                   class="link-btn border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white 
                          {{ request()->routeIs('admin.overview') ? 'active' : '' }}">
                    Overview
                </a>
                
                <!-- Link to Award Certificate -->
                <a href="{{ route('admin.award') }}" 
                   class="link-btn border-2 border-green-500 text-green-500 hover:bg-green-500 hover:text-white
                          {{ request()->routeIs('admin.award') ? 'active' : '' }}">
                    Award Certificate
                </a>
                
                <!-- Link to Violation -->
                <a href="{{ route('admin.violation') }}" 
                   class="link-btn border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white
                          {{ request()->routeIs('admin.violation') ? 'active' : '' }}">
                    Violation
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Content goes here -->
                    <p>Welcome to the Dashboard!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
