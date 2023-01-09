<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Diets') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900 dark:text-gray-100">
            <div class="text-gray-900 dark:text-gray-100 space-y-5">
                <div class="flex items-start justify-between">
                    <div>
                        <label for="age"
                            class="block  text-xs font-regular text-gray-900 dark:text-gray-400">Age</label>
                        <h1 class="font-semibold text-lg">{{ $user_diet['age'] }}</h1>
                    </div>
                    <a href="/user-diets/edit"
                        class="text-white hover:cursor-pointer bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                        Edit
                    </a>
                </div>
                <div>
                    <label for="age"
                        class="block  text-xs font-regular text-gray-900 dark:text-gray-400">Gender</label>
                    <h1 class="font-semibold text-lg">{{ ucfirst($user_diet['gender']) }}</h1>
                </div>
                <div>
                    <label for="weight" class="block  text-xs font-regular text-gray-900 dark:text-gray-400">Weight
                        (Kg)</label>
                    <h1 class="font-semibold text-lg">{{ $user_diet['weight'] }} Kg</h1>
                </div>
                <div>
                    <label for="height" class="block  text-xs font-regular text-gray-900 dark:text-gray-400">Height
                        (Cm)</label>
                    <h1 class="font-semibold text-lg">{{ $user_diet['height'] }} Cm</h1>
                </div>
                <div>
                    <label for="activity" class="block  text-xs font-regular text-gray-900 dark:text-gray-400">Activity
                        Level</label>
                    <h1 class="font-semibold text-lg">{{ ucfirst($user_diet['activity']) }}</h1>
                </div>
                <div>
                    <label for="goal" class="block  text-xs font-regular text-gray-900 dark:text-gray-400">Diet
                        Goal</label>
                    <h1 class="font-semibold text-lg">{{ ucfirst($user_diet['goal']) }}</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
