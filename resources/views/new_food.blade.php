<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Food') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- HTML for the form -->
                <form action="/foods_admin" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-5 gap-10">
                        <div class="col-span-1">
                        <label for="photo">Photo:</label><br>
                        <input type="file" id="photo" name="photo" accept=".jpg"><br>
                        <img id="preview" src="#" alt="Preview" class="hidden w-full h-48 object-cover object-center rounded-lg">
                        </div>
                        <div class="col-span-1">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name"><br>
                        <label for="category">Category:</label><br>
                        <input type="text" id="category" name="category"><br>
                        <label for="description">Description:</label><br>
                        <textarea id="desciption" name="description" rows="4"></textarea><br>
                        </div>
                        <div class="col-span-1">
                        <label for="calorie">Calorie:</label><br>
                        <input type="text" id="calorie" name="calorie"><br>
                        <label for="fats">Fats:</label><br>
                        <input type="text" id="fats" name="fats"><br>
                        <label for="carb">Carb:</label><br>
                        <input type="text" id="carb" name="carb"><br>
                        <label for="protein">Protein:</label><br>
                        <input type="text" id="protein" name="protein"><br>
                        </div>
                        <div class="col-span-1">
                        <label for="ingredients">Ingredients:</label><br>
                        <textarea id="ingredients" name="ingredients" rows="10"></textarea><br>
                        </div>
                        <div class="col-span-1">
                        <label for="instructions">Instructions:</label><br>
                        <textarea id="instructions" name="instructions" rows="10"></textarea><br>
                        </div>
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
            </form>
        </div>
    </div>

</x-app-layout>