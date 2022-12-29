<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Food Info') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-5 px-6 text-2xl font-medium text-gray-900 dark:text-gray-100">
                <h1>{{ $food['name'] }}</h1>
                <p class="text-sm">{!! nl2br(e($food['instruction'])) !!}</p>
            </div>
        </div>
    </div>

</x-app-layout>
