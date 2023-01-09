<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Food') }}
        </h2>
    </x-slot>
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- HTML for the form -->
            <form action='/admin-dashboard/food/create/submit' method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-5 gap-10">
                    <div class="col-span-1">
                    <label for="photo"
                        class="text-sm font-medium text-gray-900 dark:text-white">Photo:</label><br>
                    <input class="dark:text-slate-100 form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" accept=".jpg"><br>
                    @error('photo')
                        <div class="text-sm font-small text-red-700 dark:text-red invalid-feedback" role="alert">
                            <strong>File format must be .jgp</strong> 
                        </div>
                    @enderror
                    <img id="preview" src="#" alt="Preview" class="hidden w-full h-48 object-cover object-center rounded-lg">
                    </div>
                    <div class="col-span-1">
                    <label for="name"
                        class="text-sm font-medium text-gray-900 dark:text-white">Name:</label><br>
                    <input class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100 " type="text" id="name" name="name" value="{{ old('name') }}"
                        required><br>
                    <label for="category"
                        class="text-sm font-medium text-gray-900 dark:text-white">Category:</label><br>
                    <input class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100 form-control @error('photo') is-invalid @enderror" type="text" id="category" name="category" value="{{ old('category') }}"
                        required><br>
                    <label for="description"
                        class="text-sm font-medium text-gray-900 dark:text-white">Description:</label><br>
                    <textarea class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" id="desciption" name="description" rows="4" 
                        required>{{ old('description') }}</textarea><br>
                    </div>
                    <div class="col-span-1">
                    <label for="calories"
                        class="text-sm font-medium text-gray-900 dark:text-white">Calorie:</label><br>
                    <input class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" type="text" id="calories" name="calories" value="{{ old('calories') }}"
                        required><br>
                    @error('calories')
                        <div class="text-sm font-small text-red-700 dark:text-red invalid-feedback" role="alert">
                            <strong>Calorie must be integer</strong> 
                        </div>
                    @enderror
                    <label for="fat"
                        class="text-sm font-medium text-gray-900 dark:text-white">Fats:</label><br>
                    <input class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" type="text" id="fat" name="fat" value="{{ old('fat') }}"
                        required><br>
                    @error('fat')
                        <div class="text-sm font-small text-red-700 dark:text-red invalid-feedback" role="alert">
                            <strong>Fats must be integer/float with maximum length is 6 </strong> 
                        </div>
                    @enderror
                    <label for="carbs"
                        class="text-sm font-medium text-gray-900 dark:text-white">Carbs:</label><br>
                    <input class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" type="text" id="carbs" name="carbs" value="{{ old('carbs') }}"
                        required><br>
                    @error('carbs')
                        <div class="text-sm font-small text-red-700 dark:text-red invalid-feedback" role="alert">
                            <strong>Carbs must be integer/float with maximum length is 6 </strong> 
                        </div>
                    @enderror
                    <label for="protein"
                        class="text-sm font-medium text-gray-900 dark:text-white">Protein:</label><br>
                    <input class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" type="text" id="protein" name="protein" value="{{ old('protein') }}"
                        required><br>
                    @error('protein')
                        <div class="text-sm font-small text-red-700 dark:text-red invalid-feedback" role="alert">
                            <strong>Protein must be integer/float with maximum length is 6 </strong> 
                        </div>
                    @enderror
                    </div>
                    <div class="col-span-1">
                    <label for="ingredient"
                        class="text-sm font-medium text-gray-900 dark:text-white">Ingredients:</label><br>
                    <textarea class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" id="ingredient" name="ingredient" rows="10" value="{{ old('ingredient') }}"
                        required>{{ old('ingredient') }}</textarea><br>
                    </div>
                    <div class="col-span-1">
                    <label for="instruction"
                        class="text-sm font-medium text-gray-900 dark:text-white">Instructions:</label><br>
                    <textarea class="rounded mb-3 dark:bg-gray-600 dark:text-slate-100" id="instruction" name="instruction" rows="10" value="{{ old('instruction') }}"
                        required>{{ old('instruction') }}</textarea><br>
                    </div>
                </div>
                <div class="flex items-center ">

                    <div class="actions">
                        <a href="/admin-dashboard/food" class="button mb-5 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Back</a>
                    </div>
                    <button type="submit"
                    class="text-white ml-5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Submit
                </button>
            </div>
            </form>
                
               


            <!-- JavaScript for previewing the photo -->
            <script>
            const input = document.getElementById('photo');
            const preview = document.getElementById('preview');
            input.addEventListener('change', () => {
                const file = input.files[0];
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                preview.src = reader.result;
                preview.classList.remove('hidden');
                });
                reader.readAsDataURL(file);
            });
            </script>
        </div>
    </div>

</x-app-layout>