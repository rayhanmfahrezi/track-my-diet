<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Saved Food') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
