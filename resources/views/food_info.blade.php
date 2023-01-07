<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Food Info') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-5 px-6  text-gray-900 dark:text-gray-100">
                {{-- <a class="mb-5 inline-block" href="{{ url()->previous() }}">
                    << Back</a> --}}

                <div class="flex items-start md:space-x-10 flex-col md:flex-row">
                    <img class="object-cover mb-5 rounded-lg h-96 w-full md:w-4/6"
                        src="/images/{{ $food['category'] }}/{{ $food['name'] }}.jpg" alt="{{ $food['name'] }} Image">
                    <div class="md:w-2/6">
                        <h1 class="text-3xl font-bold mb-5">{{ $food['name'] }}</h1>

                        <p class="mb-5">{{ $food['description'] }}</p>

                        <div class="grid grid-cols-2 gap-2 ">
                            <div class="px-3 py-1 rounded-full bg-orange-600 bg-opacity-70">Calories :
                                {{ $food['calories'] }}</div>
                            <div class="px-3 py-1 rounded-full bg-blue-600 bg-opacity-70">Carbs :
                                {{ $food['carbs'] }}</div>
                            <div class="px-3 py-1 rounded-full bg-yellow-600 bg-opacity-70">Fats :
                                {{ $food['fat'] }}</div>
                            <div class="px-3 py-1 rounded-full bg-green-600 bg-opacity-70">Protein :
                                {{ $food['protein'] }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mt-10">
                            <a href="/like/{{ $food['id'] }}"
                                class="px-3 py-1 hover:cursor-pointer rounded-sm text-center bg-pink-500 dark:bg-pink-800 bg-opacity-70">{{ $food['like_count'] }}
                                Like</a>
                            @if ($food['saved'])
                                <a href="/unsave/{{ $food['id'] }}"
                                    class="px-3 py-1 rounded-sm text-center bg-gray-400 dark:bg-gray-600 bg-opacity-70">Saved</a>
                            @else
                                <a href="/save/{{ $food['id'] }}"
                                    class="px-3 py-1 rounded-sm text-center bg-gray-400 dark:bg-blue-600 bg-opacity-70">Save</a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="flex justify-between mt-10">
                    <div class="border-r border-gray-600 pr-12 py-5">
                        <h1 class="text-2xl font-bold">Ingredients</h1>
                        <ul class=" list-disc mt-5">

                            @foreach ($ingredients as $ingredient)
                                <li class="ml-4">
                                    <p class="text-sm">{{ trim($ingredient) }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="w-4/6 py-5">
                        <h1 class="text-2xl font-bold">Instruction</h1>
                        <p class="text-sm">{!! nl2br(e($food['instruction'])) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
