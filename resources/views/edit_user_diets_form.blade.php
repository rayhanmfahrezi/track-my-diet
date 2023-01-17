<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit User Diets') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900 dark:text-gray-100">
            <div class="text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ url('/user-diets/update') }}" class="mb-10 space-y-5">
                    @csrf
                    <div>
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="text" id="age" name="age" value="{{ $user_diet['age'] }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Age" required>
                    </div>
                    <div>
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <div class="flex items-center mb-4">
                            <input checked id="gender-1" type="radio" value="man" name="gender"
                                {{ $user_diet['gender'] == 'man' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gender-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Man</label>
                        </div>
                        <div class="flex items-center">
                            <input id="gender-2" type="radio" value="woman" name="gender"
                                {{ $user_diet['gender'] == 'woman' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gender-2"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Woman</label>
                        </div>
                    </div>
                    <div>
                        <label for="weight"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight (Kg)</label>
                        <input type="text" id="weight" name="weight" value="{{ $user_diet['weight'] }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Weight" required>
                    </div>
                    <div>
                        <label for="height"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height (Cm)</label>
                        <input type="text" id="height" name="height" value="{{ $user_diet['height'] }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Height" required>
                    </div>
                    <div>
                        <label for="activity"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Activity Level</label>
                        <div class="flex items-center mb-4">
                            <input checked id="activity-1" type="radio" value="sedentary" name="activity"
                                {{ $user_diet['activity'] == 'sedentary' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="activity-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sedentary
                                (little or no exercise)</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input checked id="activity-1" type="radio" value="normal" name="activity"
                                {{ $user_diet['activity'] == 'normal' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="activity-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Normal Excercise (3-4
                                times/week)</label>
                        </div>
                        <div class="flex items-center">
                            <input id="activity-2" type="radio" value="intense" name="activity"
                                {{ $user_diet['activity'] == 'intense' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="activity-2"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Intense Excercise (6-7
                                times/week)</label>
                        </div>
                    </div>
                    <div>
                        <label for="goal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diet
                            Goal </label>
                        <div class="flex items-center mb-4">
                            <input checked id="goal-1" type="radio" value="loss" name="goal"
                                {{ $user_diet['goal'] == 'loss' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="goal-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Loss</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="goal-2" type="radio" value="maintain" name="goal"
                                {{ $user_diet['goal'] == 'maintain' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="goal-2"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maintain</label>
                        </div>
                        <div class="flex items-center">
                            <input id="goal-3" type="radio" value="gain" name="goal"
                                {{ $user_diet['goal'] == 'gain' ? 'selected' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="goal-3"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gain</label>
                        </div>
                    </div>


                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Save Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
