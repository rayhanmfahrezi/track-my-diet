<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-5 px-6 text-2xl font-medium text-gray-900 dark:text-gray-100">
                Overview
            </div>
            <div class=" grid grid-cols-1 md:grid-cols-3 gap-3 px-5 md:px-0">
                <div class=" bg-orange-600 overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-xl font-bold mb-3">
                            Remaining
                        </h1>
                        <h1 class="text-3xl font-bold">
                            800
                        </h1>
                    </div>
                </div>
                <div class=" bg-green-600 overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-xl font-bold mb-3">
                            Goals
                        </h1>
                        <h1 class="text-3xl font-bold">
                            2000
                        </h1>
                    </div>
                </div>
                <div class=" bg-blue-600 overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-xl font-bold mb-3">
                            Calories
                        </h1>
                        <h1 class="text-3xl font-bold">
                            1200
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
