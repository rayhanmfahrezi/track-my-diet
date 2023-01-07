<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search Food') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="  overflow-hidden shadow-sm rounded-lg mb-7">
                <form action="/dashboard/search" method="GET">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" name="search" value="{{ old('search') }}" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Foods" required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

            </div>
            <div class="py-5 px-6 text-2xl font-medium text-gray-900 dark:text-gray-100">
                Show {{ count($foods) }} results for "{{ $name }}"
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7 px-5 md:px-0 mt-10">
                @foreach ($foods as $food)
                    <a href="{{ url('dashboard/food/' . $food['id']) }}"
                        class=" text-gray-900 dark:text-gray-100 p-5 rounded-md bg-gray-200 dark:bg-gray-700 hover:scale-105 transition duration-100 hover:cursor-pointer">
                        <img class="object-cover mb-5 rounded-lg h-48 w-full"
                            src='{{ url("/images/{$food['category']}/{$food['name']}.jpg") }}'
                            alt="{{ $food['name'] }} Image">
                        <h1 class="text-2xl font-bold">{{ $food['name'] }}</h1>
                        <div class="grid grid-cols-2 gap-2 mt-5">
                            <div class="px-3 py-1 rounded-full bg-orange-600 bg-opacity-70">Cal :
                                {{ $food['calories'] }}</div>
                            <div class="px-3 py-1 rounded-full bg-blue-600 bg-opacity-70">Car :
                                {{ $food['carbs'] }}</div>
                            <div class="px-3 py-1 rounded-full bg-yellow-600 bg-opacity-70">Fat :
                                {{ $food['fat'] }}</div>
                            <div class="px-3 py-1 rounded-full bg-green-600 bg-opacity-70">Pro :
                                {{ $food['protein'] }}</div>
                        </div>
                        {{-- <p class="mt-5">{{ $food['description'] }}</p> --}}

                    </a>
                @endforeach
            </div>
        </div>
    </div>





</x-app-layout>
