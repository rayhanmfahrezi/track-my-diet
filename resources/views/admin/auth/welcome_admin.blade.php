<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Food') }}
        </h2>
    </x-slot>


    <style>
        .table {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
        }

        .cell {
            flex: 5;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .cell_id {
            flex: 1;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .cell_actions {
            flex: 4;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .header {
            font-weight: bold;
            background-color: #eee;
        }

        .button {
            display: inline-block;
            padding: 5px 10px;
            margin: auto;
            cursor: pointer;
        }

    </style>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="actions mb-5">
                <a href="/admin-dashboard/food/create" class="button rounded dark:text-slate-200 text-gray-800 bg-green-700 ">New</a>
            </div>
            <div class="table">
                <div class="row header">
                    <div class="cell_id">id</div>
                    <div class="cell">Name</div>
                    <div class="cell">Food Category</div>
                    <div class="cell">Created at</div>
                    <div class="cell">Updated at</div>
                    <div class="cell_actions">Actions</div>
                </div>
                @foreach ($foods as $food)
                    <div class="row">
                        <div class="cell_id dark:text-slate-200 text-gray-800">{{ $food->id }}</div>
                        <div class="cell dark:text-slate-200 text-gray-800">{{ $food->name }}</div>
                        <div class="cell dark:text-slate-200 text-gray-800">{{ $food->category }}</div>
                        <div class="cell dark:text-slate-200 text-gray-800">{{ $food->created_at }}</div>
                        <div class="cell dark:text-slate-200 text-gray-800">{{ $food->updated_at }}</div>
                        <div class="cell_actions">
                            <a href="/admin-dashboard/food/edit/{{ $food->id }}" class="button rounded dark:text-slate-200 text-gray-800 bg-blue-700">Edit</a>
                            <a href="/admin-dashboard/food/delete/{{ $food->id }}" class="button rounded dark:text-slate-200 text-gray-800 bg-red-700">Delete</a>
                        </div>
                    </div>
                 @endforeach
            </div> 
        </div>      
    </div>    


</x-app-layout>
