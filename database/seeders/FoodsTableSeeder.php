<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            [
                "name" => "Fried Rice",
                "category" => "Grains",
                "description" => "A simple meals so delicious",
                "ingredient" => "Grain rice, Small white onion, Peas and Carrots, Eggs, Sesame Oil, Soy Sauce",
                "instruction" => "
                1. Preheat a large skillet or wok to medium heat. Pour sesame oil in the bottom. Add white onion and peas and carrots and fry until tender.
                2. Slide the onion, peas and carrots to the side, and pour the beaten eggs onto the other side. Using a spatula, scramble the eggs. Once cooked, mix the eggs with the vegetable mix.
                3. Add the rice to the veggie and egg mixture. Pour the soy sauce on top. Stir and fry the rice and veggie mixture until heated through and combined. ",
                "calories" => 210.00,
                "carbs" => 45.60,
                "fat" => 0.50,
                "protein" => 4.40,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Mozarella Stick",
                "category" => "Grains",
                "description" => "Mozzarella sticks are a popular snack or appetizer that is made by coating slices of mozzarella cheese in a breading mixture and deep-frying them until they are crispy and golden brown",
                "ingredient" => "Mozzarella cheese, Flour, Eggs, Breadcrumbs, Seasonings, Vegetable oil, Dipping sauces",
                "instruction" => "
                1. Cut the mozzarella cheese into sticks and refrigerate until firm.
                2. Set up a breading station with flour, beaten eggs, and breadcrumb mixture. Coat the cheese sticks in the flour, eggs, and breadcrumbs. Refrigerate for at least 30 minutes.
                3. Heat oil to 375°F in a deep fryer or heavy pot. Fry the mozzarella sticks for 2-3 minutes or until golden brown. Drain on paper towels.
                4. Serve hot with dipping sauces.",
                "calories" => 80.00,
                "carbs" => 4.00,
                "fat" => 9.00,
                "protein" => 4.00,
                "serving_size" => 2,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Chicken Noodle Soup",
                "category" => "Grains",
                "description" => "Chicken noodle soup is a classic comfort food that is made by simmering chicken, vegetables, and noodles in a flavorful broth. It is typically served hot and is often enjoyed as a light meal or as a remedy for colds or other ailments.",
                "ingredient" => "Chicken, Vegetables, Noodles, Broth, Seasonings",
                "instruction" => "
                1. Cook the chicken and set aside.
                2. In a large pot, sauté the vegetables in a small amount of oil until they are tender.
                3. Add the broth and bring the soup to a boil.
                4. Add the noodles and cook according to the package instructions.
                5. Shred the cooked chicken and add it to the soup.
                6. Season the soup with salt, pepper, and any other desired seasonings.
                7. Serve the soup hot, garnished with herbs or other toppings if desired.",
                "calories" => 80.00,
                "carbs" => 4.00,
                "fat" => 9.00,
                "protein" => 4.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Spaghetti alla Carbonara",
                "category" => "Grains",
                "description" => "Spaghetti alla Carbonara is a popular Italian pasta dish that is made with spaghetti, eggs, bacon, and Parmesan cheese. It is a simple and flavorful dish that is typically served as a main course.",
                "ingredient" => "Spaghetti, Eggs, Bacon, Parmesan cheese, Salt, Pepper",
                "instruction" => "
                1. Cook the spaghetti according to the package instructions.
                2. While the spaghetti is cooking, beat the eggs in a small bowl.
                3. In a separate pan, cook the bacon until it is crispy.
                4. Drain the spaghetti and return it to the pot.
                5. Add the eggs and bacon to the pot with the spaghetti and toss everything together until the spaghetti is evenly coated in the egg and bacon mixture.
                6. Serve the spaghetti hot, garnished with grated Parmesan cheese and black pepper.",
                "calories" => 307.00,
                "carbs" => 45.00,
                "fat" => 7.00,
                "protein" => 19.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Spaghetti alla Carbonara",
                "category" => "Grains",
                "description" => "Steak Frites is a popular dish that consists of steak and fries. It is a classic bistro dish that is enjoyed all over the world, and it is often served as a main course.",
                "ingredient" => "Steak, Potatoes, Vegetable oil, Salt, Pepper",
                "instruction" => "
                1. Preheat your grill or stovetop grill pan. Season the steak with salt and pepper on both sides.
                2. Cut the potatoes into thin, even fries.
                3. Heat the oil in a deep fryer or heavy pot to 375°F.
                4. Carefully add the fries to the hot oil and cook for 3-4 minutes, or until they are golden brown and crispy. Remove the fries from the oil and drain on a paper towel-lined plate.
                5. Grill the steak for 3-4 minutes on each side for medium-rare, or longer if you prefer your steak more well-done.
                6. Let the steak rest for a few minutes before slicing it into thin strips.
                7. Serve the steak and fries hot, with a sauce or condiment on the side if desired.",
                "calories" => 1193.00,
                "carbs" => 74.00,
                "fat" => 72.00,
                "protein" => 62.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],


        ]);
    }
}
