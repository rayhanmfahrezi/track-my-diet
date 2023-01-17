<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Today Food') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ url('/today-foods/add-food') }}" class="mb-10 space-y-5">
                    @csrf
                    <div>
                        <label for="date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input required class="dark:bg-gray-600 dark:text-slate-100" type="date" id="datepicker"
                            name="date" value="{{ isset($date) ? $date : '' }}">
                    </div>
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <div class="flex">
                            <input type="text" id="name" name="name"
                                value="{{ isset($today_food['name']) ? $today_food['name'] : '' }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Name" required>
                            <button type="submit"
                                class="text-white ml-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Search
                            </button>
                        </div>
                        <h1 class="text-red-500 font-semibold text-md mt-5">
                            {{ isset($error) ? $error : '' }}
                        </h1>
                    </div>

                    <div>
                        <label for="calory"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calory</label>
                        <input type="text" id="calory" name="calory"
                            value="{{ isset($today_food['name']) ? $today_food['calories'] : '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Calory">
                    </div>

                    @isset($today_food)
                        <input type="hidden" name="id" value="{{ $today_food['id'] }}">
                    @endisset
                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Add Food
                    </button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
