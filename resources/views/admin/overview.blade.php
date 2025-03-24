<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Admin Overview</h3>
                    <p>This is an overview of the system's current status and key metrics.</p>

                    <div class="mt-6 space-y-4">
                        <h4 class="font-semibold">Recent Activity</h4>
                        <ul>
                            <li>New users: 5</li>
                            <li>Recent logins: 10</li>
                            <li>Pending violations: 2</li>
                        </ul>

                        <h4 class="font-semibold mt-4">System Statistics</h4>
                        <ul>
                            <li>Total Admins: 3</li>
                            <li>Total Users: 100</li>
                            <li>Total Awards: 20</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
