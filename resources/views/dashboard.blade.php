<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <!-- Dashboard Title -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Student Dashboard') }}
            </h2>

            <!-- Links to Overview, Award Certificate, and Violation with styles -->
            <div class="space-x-6">
                <a href="{{ route('admin.overview') }}" class="link-btn border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white 
                {{ request()->routeIs('admin.overview') ? 'active' : '' }}">
                    Overview
                </a>
                <a href="{{ route('admin.award') }}" class="link-btn border-2 border-green-500 text-green-500 hover:bg-green-500 hover:text-white 
                {{ request()->routeIs('admin.award') ? 'active' : '' }}">
                    Award Certificate
                </a>
                <a href="{{ route('admin.violation') }}" class="link-btn border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white 
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
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Chatbot Floating Button -->
    <div id="chatbot-button" class="fixed bottom-5 right-5 bg-blue-500 text-white rounded-full p-4 cursor-pointer shadow-lg">
        💬 Chat
    </div>

    <!-- Chatbot Modal -->
    <div id="chatbot-modal" class="fixed bottom-5 right-5 w-96 h-80 bg-white shadow-lg rounded-lg border-2 border-gray-300 hidden">
        <div class="flex justify-between items-center p-3 bg-blue-500 text-white rounded-t-lg">
            <span>Chat with us!</span>
            <button id="close-chatbot" class="text-xl">&times;</button>
        </div>
        <div id="chat-content" class="p-4 h-56 overflow-y-auto">
            <!-- Chat messages will appear here -->
        </div>
        <div class="p-3 bg-gray-100 rounded-b-lg">
            <input type="text" id="chat-input" class="w-full p-2 border-2 rounded" placeholder="Type a message...">
        </div>
    </div>

</x-app-layout>
