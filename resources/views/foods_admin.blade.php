<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Foods') }}
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
            flex: 1;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .cell_actions {
            flex: 1;
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
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 5px 10px;
            margin: auto;
            cursor: pointer;
        }

    </style>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="actions">
                <a href="/foods_admin/create" class="button">New</a>
            </div>
            <div class="table">
                <div class="row header">
                    <div class="cell">id</div>
                    <div class="cell">Name</div>
                    <div class="cell">Food Category</div>
                    <div class="cell">Created at</div>
                    <div class="cell">Updated at</div>
                    <div class="cell_actions">Actions</div>
                </div>
                @foreach ($foods as $food)
                    <div class="row">
                        <div class="cell">{{ $food->id }}</div>
                        <div class="cell">{{ $food->name }}</div>
                        <div class="cell">{{ $food->category }}</div>
                        <div class="cell">{{ $food->created_at }}</div>
                        <div class="cell">{{ $food->updated_at }}</div>
                        <div class="cell_actions">
                            <a href="#" class="button">Edit</a>
                            <a href="#" class="button">Delete</a>
                        </div>
                    </div>
                 @endforeach
            </div> 
        </div>      
    </div>    
     
</x-app-layout>