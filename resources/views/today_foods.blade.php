<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Today Foods') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="text-gray-900 dark:text-gray-100">
                <form method="GET" action="/today-foods" id='formId' class="mb-10">
                    <input class="dark:bg-gray-600 dark:text-slate-100" type="date" id="datepicker" name="date">
                    <button type="submit"
                        class="text-white ml-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change</button>
                </form>
                <div>
                    <h1 class="font-medium mb-3">{{ $date }}</h1>

                </div>

                <div class="flex justify-end mb-5">

                    <a href="/today-foods/add"
                        class="text-white mr-0 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 hover:cursor-pointer">Add
                        Food</a>
                </div>

                <div class=" space-y-3">
                    @foreach ($today_foods as $food)
                        <div
                            class="flex items-center justify-between text-gray-900 dark:text-gray-100 p-5 rounded-md bg-gray-200 dark:bg-gray-700">
                            <h1>
                                {{ $food['name'] }}
                            </h1>

                            <div class="flex items-center">
                                <div class="mr-20 bg-orange-600 rounded-full px-2 py-1 ">
                                    Calory : {{ $food['calory'] }}
                                </div>
                                <a href="/today-foods/edit/{{ $food['id'] }}"
                                    class="text-white block mr-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:cursor-pointer">Edit</a>
                                <a href="/today-foods/delete/{{ $food['id'] }}"
                                    class="text-white block bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 hover:cursor-pointer">Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                onSelect: function(dateText, inst) {
                    $('#formId').submit(); // <-- SUBMIT
                }
            });
        });
    </script>

</x-app-layout>
