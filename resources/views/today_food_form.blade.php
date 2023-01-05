<x-app-layout>
    <x-slot name="header">
        @if (isset($today_food))
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Today Food') }}
            </h2>
        @else
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add Today Food') }}
            </h2>
        @endif
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="text-gray-900 dark:text-gray-100">
                <form method="POST"
                    action="{{ isset($today_food) ? url('/today-foods/update') : url('/today-foods/add-food') }}"
                    class="mb-10 space-y-5">
                    @csrf
                    <div>
                        <label for="date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input class="dark:bg-gray-600 dark:text-slate-100" type="date" id="datepicker"
                            name="date" value="{{ isset($today_food['date']) ? $today_food['date'] : '' }}">
                    </div>
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" name="name"
                            value="{{ isset($today_food['name']) ? $today_food['name'] : '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Name" required>
                    </div>
                    <div>
                        <label for="calory"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calory</label>
                        <input type="text" id="calory" name="calory"
                            value="{{ isset($today_food['name']) ? $today_food['calory'] : '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Calory" required>
                    </div>
                    @isset($today_food)
                        <input type="hidden" name="id" value="{{ $today_food['id'] }}">
                    @endisset
                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        {{ isset($today_food) ? 'Save Update' : 'Add Food' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
