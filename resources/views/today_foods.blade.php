<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Today Foods') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="GET" action="/date" id='formId'>
                <input type="date" id="datepicker" name="date">
                <button type="submit"
                    class="text-white ml-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change</button>
            </form>
            @foreach ($today_foods as $food)
                <div class=" text-gray-900 dark:text-gray-100 p-5 rounded-md bg-gray-200 dark:bg-gray-700">
                    {{ $food['name'] }}
                </div>
            @endforeach



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
