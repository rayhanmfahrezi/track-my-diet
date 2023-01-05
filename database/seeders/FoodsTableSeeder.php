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
                "description" => "traditional Chinese preparation of cooked rice, vegetables, protein, soy sauce, and aromatics",
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
            // [
            //     "name" => "Mozarella Stick",
            //     "category" => "Grains",
            //     "description" => "Mozzarella sticks are a popular snack or appetizer that is made by coating slices of mozzarella cheese in a breading mixture and deep-frying them until they are crispy and golden brown",
            //     "ingredient" => "Mozzarella cheese, Flour, Eggs, Breadcrumbs, Seasonings, Vegetable oil, Dipping sauces",
            //     "instruction" => "
            //     1. Cut the mozzarella cheese into sticks and refrigerate until firm.
            //     2. Set up a breading station with flour, beaten eggs, and breadcrumb mixture. Coat the cheese sticks in the flour, eggs, and breadcrumbs. Refrigerate for at least 30 minutes.
            //     3. Heat oil to 375°F in a deep fryer or heavy pot. Fry the mozzarella sticks for 2-3 minutes or until golden brown. Drain on paper towels.
            //     4. Serve hot with dipping sauces.",
            //     "calories" => 80.00,
            //     "carbs" => 4.00,
            //     "fat" => 9.00,
            //     "protein" => 4.00,
            //     "serving_size" => 2,
            //     "like" => false,
            //     "like_count" => 0,
            //     "saved" => false,
            //     "created_at" => now(),
            //     "updated_at" => now(),
            // ],

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
                "name" => "Gado-gado",
                "category" => "Grains",
                "description" => "Gado-gado is a type of Indonesian salad that is made with a variety of boiled or blanched vegetables, such as beans, potatoes, and tofu, and is served with a peanut sauce. It is a popular street food in Indonesia and is often served with boiled eggs and rice cakes.",
                "ingredient" => "Beans, Potatoes, Carrot, Cucumber, Cabbage, Tofu, Boiled eggs, Peanut sauce, and Rice cakes",
                "instruction" => "
                1. Prepare the vegetables: Wash and chop the vegetables into bite-sized pieces. Boil or blanch the vegetables until they are tender, then drain them and set them aside.
                2. Make the peanut sauce: In a blender or food processor, combine peanuts, coconut milk, garlic, chili peppers, and other spices to make the peanut sauce. Blend until smooth, then set aside.
                3. Assemble the dish: Place the boiled vegetables in a large bowl or on a platter. Add the tofu and boiled eggs, and pour the peanut sauce over the top.
                4. Serve: Serve the gado-gado with rice cakes or other accompaniments on the side.",
                "calories" => 255.50,
                "carbs" => 32.00,
                "fat" => 16.70,
                "protein" => 15.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Soto",
                "category" => "Grains",
                "description" => "Soto is a type of Indonesian soup that is made with a variety of ingredients, such as chicken, beef, or vegetables, and is served with rice or noodles. It is a popular dish in Indonesia and is often enjoyed for breakfast, lunch, or dinner.",
                "ingredient" => "Chicken, Beef, Vegetables, Spices (such as Turmeric, Coriander, and Lemongrass), Rice or Noodles, Boiled Eggs, Herbs, and Fried Shallots",
                "instruction" => "
                1. Prepare the broth: In a large pot, combine the chicken, beef, or vegetables with water and bring to a boil. Add the spices, such as turmeric, coriander, and lemongrass, and simmer until the meats are cooked through.
                2. Cook the rice or noodles: In a separate pot, cook the rice or noodles according to the package instructions.
                3. Assemble the dish: Place the cooked rice or noodles in a bowl, then ladle the broth and meats over the top. Garnish with boiled eggs, herbs, and fried shallots.
                4. Serve: Serve the soto hot, with additional garnishes on the side if desired.",
                "calories" => 325.0,
                "carbs" => 35.00,
                "fat" => 18.70,
                "protein" => 14.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Risotto",
                "category" => "Grains",
                "description" => "Risotto is an Italian dish that is made with short-grain rice and broth, and is often flavored with wine, cheese, and a variety of ingredients, such as meats, seafood, or vegetables. It is a creamy and flavorful dish that is enjoyed as a main course or as a side dish.",
                "ingredient" => "Short-grain rice, Broth, Wine, Cheese, and a variety of meats, seafood, or vegetables.",
                "instruction" => "
                1. Prepare the ingredients: Wash and chop the vegetables, if using, and set aside. Grate the cheese, if using, and set aside.
                2. Heat the broth: In a saucepan, heat the broth over low heat. Keep the broth hot while you are cooking the risotto.
                3. Cook the rice: In a large saucepan or Dutch oven, melt the butter over medium heat. Add the rice and cook, stirring constantly, until the rice is translucent and has absorbed the butter.
                4. Add the wine: Pour the wine into the rice and cook, stirring constantly, until the wine has been absorbed.
                5. Add the broth: Ladle the hot broth into the rice, one cup at a time, stirring constantly. Allow the broth to be absorbed before adding more.
                6. Add the vegetables or meats: If using vegetables or meats, add them to the risotto during the last 10-15 minutes of cooking.
                7. Stir in the cheese: If using cheese, stir it into the risotto just before serving.
                8. Serve: Serve the risotto hot, garnished with additional cheese or herbs if desired.",
                "calories" => 400.0,
                "carbs" => 56.00,
                "fat" => 22.00,
                "protein" => 15.80,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Chicken Noodle Soup",
                "category" => "Poultry",
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

                "name" => "Ayam Bakar",
                "category" => "Poultry",
                "description" => "Ayam Bakar is an Indonesian dish that consists of grilled chicken that is marinated in a mixture of spices. The chicken is typically cooked over an open fire or grill, which gives it a smoky and charred flavor.",
                "ingredient" => "Chicken, Garlic, Ginger, Turmeric, Chili Peppers, Lemongrass, Coriander, Salt, Oil",
                "instruction" => "
                1. Prepare the marinade: In a food processor or blender, combine the garlic, ginger, turmeric, chili peppers, lemongrass, coriander, salt, and oil. Blend the ingredients together until they form a smooth paste.
                2. Marinate the chicken: Place the chicken in a large mixing bowl and coat it with the marinade. Cover the bowl and refrigerate the chicken for a few hours or overnight to allow the flavors to penetrate the meat.
                3. Preheat the grill: Preheat a grill or outdoor grill to medium-high heat.
                4. Grill the chicken: Place the chicken on the grill and cook it for 6-8 minutes on each side, or until it is cooked through and the internal temperature reaches 165°F.
                5. Serve: Serve the Ayam Bakar hot, with rice and a variety of side dishes, such as vegetables, fruits, or condiments.",
                "calories" => 400.00,
                "carbs" => 25.00,
                "fat" => 30.00,
                "protein" => 22.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Bebek Goreng",
                "category" => "Poultry",
                "description" => "Bebek Goreng is an Indonesian dish that consists of deep-fried duck that is marinated in a mixture of spices. The duck is typically cut into small pieces and coated in a mixture of flour, eggs, and spices before it is deep-fried until crispy and golden brown.",
                "ingredient" => "Duck, Flour, Eggs, Salt, Pepper, Oil",
                "instruction" => "
                1. Prepare the duck: Cut the duck into small pieces and set aside.
                2. Make the batter: In a large mixing bowl, whisk together the flour, eggs, salt, and pepper until a smooth batter is formed.
                3. Coat the duck: Dip the duck pieces in the batter, making sure they are fully coated.
                4. Heat the oil: Heat a large pot or deep fryer filled with oil over medium-high heat.
                5. Deep-fry the duck: Carefully place the coated duck pieces in the hot oil and deep-fry them for 6-8 minutes, or until they are crispy and golden brown.
                6. Drain the duck: Remove the duck pieces from the oil and drain them on a paper towel to remove any excess oil.
                7. Serve: Serve the Bebek Goreng hot, with rice and a variety of side dishes, such as vegetables, fruits, or condiments.",
                "calories" => 532.00,
                "carbs" => 29.40,
                "fat" => 44.00,
                "protein" => 38.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Chicken Satay",
                "category" => "Poultry",
                "description" => "Chicken Satay is a Southeast Asian dish that consists of thin slices of chicken that are marinated in a mixture of spices and then grilled on skewers.",
                "ingredient" => "Chicken, Turmeric, Coriander, Cumin, Lemongrass, Garlic, Ginger, Shallots, Fish Sauce, Sugar, Oil",
                "instruction" => "
                1. Prepare the marinade: In a small bowl, combine the turmeric, coriander, cumin, lemongrass, garlic, ginger, shallots, fish sauce, sugar, and oil to create the marinade.
                2. Marinate the chicken: Cut the chicken into thin slices and place them in a large mixing bowl. Add the marinade to the chicken and toss until the chicken is well coated. Cover the bowl and refrigerate the chicken for at least 2 hours or overnight.
                3. Thread the chicken onto skewers: Preheat a grill or stovetop grill over medium-high heat. Thread the marinated chicken slices onto skewers, making sure they are evenly spaced.
                4. Grill the chicken: Place the skewers on the grill and cook the chicken for 5-7 minutes on each side, or until it is cooked through and tender.
                5. Serve: Serve the Chicken Satay hot, with a peanut sauce and rice or noodles, as well as a variety of side dishes, such as vegetables, fruits, or condiments.",
                "calories" => 300.00,
                "carbs" => 6.20,
                "fat" => 10.00,
                "protein" => 25.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Ayam Geprek",
                "category" => "Poultry",
                "description" => "Ayam Geprek is an Indonesian dish that consists of grilled or fried chicken that is pounded or 'geprek' until it is tender and then coated in a spicy and savory sauce. The sauce is typically made with chili peppers, garlic, and other seasonings, and gives the chicken a bold and flavorful taste.",
                "ingredient" => "Chicken, Chili peppers, Garlic, Shallots, Lemon or Lime juice, and Oil.",
                "instruction" => "
                1. Prepare the chicken: Preheat a grill or stovetop grill over medium-high heat. Season the chicken with salt and pepper and grill or fry it until it is cooked through and tender. Alternatively, you can use leftover cooked chicken or store-bought rotisserie chicken for this recipe.
                2. Make the sauce: In a small bowl, combine the chili peppers, garlic, shallots, lemon or lime juice, and oil to create the sauce.
                3. Pound the chicken: Place the cooked chicken on a cutting board and use a rolling pin or mallet to pound it until it is tender.
                4. Coat the chicken in the sauce: Cut the pounded chicken into thin slices and place them in a large mixing bowl. Add the sauce to the chicken and toss until the chicken is well coated.
                5. Serve: Serve the Ayam Geprek hot, with rice and a variety of side dishes, such as vegetables, fruits, or condiments.",
                "calories" => 335.00,
                "carbs" => 9.00,
                "fat" => 11.00,
                "protein" => 26.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Steak Frites",
                "category" => "Meat",
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

            [
                "name" => "Rendang",
                "category" => "Meat",
                "description" => "Rendang is an Indonesian dish that is made with meat that is slow-cooked in coconut milk and a variety of spices until it is tender and flavorful.",
                "ingredient" => "Meat (such as beef, lamb, or chicken), Coconut milk, Chili peppers, Garlic, Shallots, Turmeric, Lemongrass, Ginger, Galangal, Candlenut, Kaffir lime leaves, Coriander seeds, Cumin, Cardamom, Cloves, Salt, Sugar, Tamarind juice, Oil",
                "instruction" => "
                1. Marinate the meat: In a large mixing bowl, combine the meat with the chili peppers, garlic, shallots, turmeric, lemongrass, ginger, galangal, candlenut, kaffir lime leaves, coriander seeds, cumin, cardamom, cloves, salt, sugar, and tamarind juice. Mix well to coat the meat evenly with the marinade. Cover the bowl and refrigerate for at least 2 hours, or overnight.
                2. Cook the meat: Heat a large pot or Dutch oven over medium heat. Add the oil and the marinated meat, and cook until the meat is browned on all sides. Add the coconut milk and bring the mixture to a boil. Reduce the heat to low and simmer the meat until it is tender and the sauce has thickened, stirring occasionally. This process can take several hours, depending on the cut of meat you are using.
                3. Serve: Serve the Rendang hot, with rice and a variety of side dishes, such as vegetables, fruits, or condiments.",
                "calories" => 660.00,
                "carbs" => 29.90,
                "fat" => 34.00,
                "protein" => 38.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Meatballs",
                "category" => "Meat",
                "description" => "Meatballs are a type of food that is made with ground meat, such as beef, pork, chicken, or lamb, that is shaped into small balls and cooked in a variety of ways.",
                "ingredient" => "Ground meat (such as beef, pork, chicken, or lamb), Bread crumbs, Onion, Garlic, Egg, Herbs (such as parsley or basil), Spices (such as black pepper or paprika), Salt, Olive oil",
                "instruction" => "
                1. Marinate the meat: In a large mixing bowl, combine the meat with the chili peppers, garlic, shallots, turmeric, lemongrass, ginger, galangal, candlenut, kaffir lime leaves, coriander seeds, cumin, cardamom, cloves, salt, sugar, and tamarind juice. Mix well to coat the meat evenly with the marinade. Cover the bowl and refrigerate for at least 2 hours, or overnight.
                2. Cook the meat: Heat a large pot or Dutch oven over medium heat. Add the oil and the marinated meat, and cook until the meat is browned on all sides. Add the coconut milk and bring the mixture to a boil. Reduce the heat to low and simmer the meat until it is tender and the sauce has thickened, stirring occasionally. This process can take several hours, depending on the cut of meat you are using.
                3. Serve: Serve the Rendang hot, with rice and a variety of side dishes, such as vegetables, fruits, or condiments.",
                "calories" => 660.00,
                "carbs" => 29.90,
                "fat" => 34.00,
                "protein" => 38.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Mozzarella Sticks",
                "category" => "Dairy",
                "description" => "Mozzarella sticks are a popular snack or appetizer that is made by coating slices of mozzarella cheese in a breading mixture and deep-frying them until they are crispy and golden brown.",
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
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Cheddar Cheese Sticks",
                "category" => "Dairy",
                "description" => "Cheddar cheese sticks are a snack food made with long strips of cheddar cheese that are breaded and fried. They are a popular snack food that is enjoyed by people all over the world.",
                "ingredient" => "Mozzarella cheese, Flour, Eggs, Breadcrumbs, Seasonings, Vegetable oil, Dipping sauces",
                "instruction" => "
                1. Cut the cheddar cheese into long, thin sticks.
                2. In a shallow dish, mix together the flour, salt, black pepper, paprika, garlic powder, and onion powder.
                3. In a separate shallow dish, beat together the egg and milk.
                4. Place the bread crumbs in a third shallow dish.
                5. Dip the cheese sticks in the flour mixture, then the egg mixture, and then the bread crumbs, making sure to coat them evenly.
                6. Freeze the cheese sticks for at least 1 hour, or until firm.
                7. Heat oil in a deep fryer or large pot to 375°F (190°C). Carefully place the frozen cheese sticks in the hot oil and fry for 2-3 minutes, or until they are golden brown and crispy. Drain on paper towels and serve hot with your choice of dip.",
                "calories" => 245.00,
                "carbs" => 14.00,
                "fat" => 18.00,
                "protein" => 12.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Feta Cheese Balls",
                "category" => "Dairy",
                "description" => "Feta cheese balls are a snack food made with balls of feta cheese that are breaded and fried.",
                "ingredient" => "Feta cheese, Flour, Egg, Milk, Bread crumbs, Salt, Black pepper, Paprika, Garlic powder, Onion powder",
                "instruction" => "
                1. Cut the feta cheese into small, bite-sized pieces.
                2. In a shallow dish, mix together the flour, salt, black pepper, paprika, garlic powder, and onion powder.
                3. In a separate shallow dish, beat together the egg and milk.
                4. Place the bread crumbs in a third shallow dish.
                5. Dip the cheese balls in the flour mixture, then the egg mixture, and then the bread crumbs, making sure to coat them evenly.
                6. Freeze the cheese balls for at least 1 hour, or until firm.
                7. Heat oil in a deep fryer or large pot to 375°F (190°C). Carefully place the frozen cheese balls in the hot oil and fry for 2-3 minutes, or until they are golden brown and crispy. Drain on paper towels and serve hot with your choice of dip.",
                "calories" => 75.00,
                "carbs" => 0.00,
                "fat" => 6.00,
                "protein" => 6.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Sushi",
                "category" => "Seafood",
                "description" => "Sushi is a traditional Japanese dish made with vinegared rice and a variety of fillings, such as seafood, vegetables, and sometimes meat. The fillings are typically rolled in sushi rice and seaweed (nori) to create small bite-sized pieces that are easy to eat with your fingers.",
                "ingredient" => "Sushi rice, Rice vinegar, Sugar, Salt, Fillings of your choice (such as seafood, vegetables, or meat), Seaweed (nori), Soy sauce, Wasabi, Pickled ginger",
                "instruction" => "
                1. Cook sushi rice according to package instructions.
                2. While the rice is cooking, prepare your fillings and seaweed (nori).
                3. Once the rice is cooked, add rice vinegar, sugar, and salt to the rice and mix well.
                4. Place a sheet of seaweed on a sushi mat or cutting board.
                5. Spread a thin layer of sushi rice over the seaweed, leaving a small border at the top.
                6. Arrange your fillings in a line near the bottom of the rice.
                7. Roll the sushi tightly with the mat or your hands, using the border of rice at the top to seal the roll.
                8. Repeat the process with the remaining ingredients until you have made the desired number of sushi rolls.
                9. Cut the sushi rolls into bite-sized pieces using a sharp knife.
                10. Serve the sushi with soy sauce, wasabi, and pickled ginger",
                "calories" => 81.00,
                "carbs" => 3.00,
                "fat" => 4.00,
                "protein" => 20.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Crab Cakes",
                "category" => "Seafood",
                "description" => "Crab cakes are a popular dish made with crab meat, bread crumbs, and spices. They are typically formed into small patties and then pan-fried, grilled, or baked until they are golden brown and crispy on the outside.",
                "ingredient" => "Crab meat, Bread crumbs, Egg, Mayonnaise, Mustard, Old Bay seasoning or other seasonings of your choice, Lemon juice, Parsley, Salt and pepper, Oil for frying (optional)",
                "instruction" => "
                1. Mix together crab meat, bread crumbs, egg, mayonnaise, mustard, and seasonings in a bowl.
                2. Shape the mixture into small, round cakes.
                3. Heat oil in a frying pan over medium heat.
                4, Place the crab cakes in the pan and cook until golden brown on both sides, about 2-3 minutes per side.
                5. Serve the crab cakes hot, garnished with lemon wedges and parsley if desired.",
                "calories" => 275.00,
                "carbs" => 18.00,
                "fat" => 17.00,
                "protein" => 26.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Calamari",
                "category" => "Seafood",
                "description" => "Calamari is a dish made with squid that has been battered and fried until it is crispy and tender.",
                "ingredient" => "Squid (fresh or frozen), Flour, Salt, Pepper, Paprika, Garlic powder, Baking powder, Egg, Milk, Vegetable oil or other oil for frying",
                "instruction" => "
                1. If using fresh squid, clean and slice the squid into rings. If using frozen squid, thaw it according to package instructions.
                2. In a large bowl, mix together the flour, salt, pepper, paprika, garlic powder, and baking powder.
                3. In a separate bowl, beat together the egg and milk.
                4. Dip the squid rings into the egg mixture, then coat them in the flour mixture.
                5. Heat oil in a deep fryer or large, deep pot to 375°F.
                6. Carefully place the calamari rings into the hot oil and fry for 1-2 minutes, or until they are golden brown.
                7. Remove the calamari from the oil with a slotted spoon and drain on paper towels.
                8. Serve the calamari hot, with dipping sauce on the side if desired.",
                "calories" => 265.00,
                "carbs" => 23.00,
                "fat" => 11.00,
                "protein" => 30.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Sayur Asem",
                "category" => "Vegetables",
                "description" => "Sayur asem is a sour and spicy vegetable soup made with tamarind juice and various vegetables. It is a popular dish in Indonesia and is often served as a side dish with rice or as a main dish with noodles or tofu.",
                "ingredient" => "Long beans, Corn, Cassava, Sweet potatoes, Chayote, Green beans, Young jackfruit, Tamarind juice, Chili peppers, Garlic, Shallots, Ground peanuts, Coconut milk, Coriander, Cumin, Turmeric",
                "instruction" => "
                1. Boil the vegetables in a pot of water until they are tender.
                2. Add tamarind juice, chili peppers, and spices to the pot.
                3. Thicken the broth with ground peanuts or coconut milk.
                4. Garnish with fried shallots and chili peppers.
                5. Serve hot as a side dish with rice or as a main dish with noodles or tofu.",
                "calories" => 80.00,
                "carbs" => 12.90,
                "fat" => 2.76,
                "protein" => 3.18,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Capcay",
                "category" => "Vegetables",
                "description" => "Capcay is a stir-fried vegetable dish made with a variety of vegetables, including carrots, bell peppers, and onions.",
                "ingredient" => "Carrots, Bell peppers, Onions, Garlic, Soy sauce, Oyster sauce, Cornstarch, Water, Vegetable oil, Salt, Pepper",
                "instruction" => "
                1. Slice the vegetables into thin strips or small pieces.
                2. Heat a wok or large pan over high heat and add vegetable oil.
                3. Sauté the garlic and onions until fragrant.
                4. Add the vegetables and stir-fry until they are tender.
                5. Stir in soy sauce and oyster sauce, then add a little water and cornstarch to thicken the sauce.
                6. Season with salt and pepper to taste.
                7. Serve hot as a side dish with rice or as a main dish with noodles or tofu.",
                "calories" => 97.00,
                "carbs" => 4.20,
                "fat" => 6.30,
                "protein" => 5.80,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Ratatouille",
                "category" => "Vegetables",
                "description" => "Ratatouille is a traditional French dish made with a variety of vegetables, including eggplant, zucchini, bell peppers, and tomatoes. It is typically slow-cooked in a flavorful tomato-based sauce, which infuses the vegetables with a rich and complex taste.",
                "ingredient" => "Eggplant, Zucchini, Bell peppers, Tomatoes, Onions, Garlic, Olive oil, Salt, Pepper, Thyme, Basil, Bay leaves",
                "instruction" => "
                1. Preheat the oven to 350°F (180°C).
                2. Slice the vegetables into thin rounds or small pieces.
                3. Heat a large pan or pot over medium heat and add olive oil.
                4. Sauté the garlic and onions until fragrant.
                5. Add the eggplant, zucchini, bell peppers, and tomatoes to the pan.
                6. Season with salt, pepper, thyme, basil, and bay leaves.
                7. Cook the vegetables until they are tender and the flavors have melded together.
                8. Transfer the Ratatouille to a baking dish and bake for 15-20 minutes.
                9. Serve hot as a side dish or as a topping for pasta or rice.",
                "calories" => 152.00,
                "carbs" => 11.10,
                "fat" => 12.30,
                "protein" => 2.10,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Orange Marmalade",
                "category" => "Fruits",
                "description" => "Orange marmalade is a sweet spread or preserve made from the rinds and juice of oranges. It is typically made by boiling the oranges and sugar together until the mixture thickens and becomes a spreadable consistency.",
                "ingredient" => "Oranges, Lemon, Sugar, Water",
                "instruction" => "
                1. Peel and thinly slice the oranges.
                2. Combine the oranges with sugar and water in a pot.
                3. Cook over low heat, stirring occasionally, until the marmalade has thickened.
                4. Transfer to jars and allow to cool before sealing and storing.",
                "calories" => 49.00,
                "carbs" => 13.00,
                "fat" => 0.00,
                "protein" => 0.10,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Apple Pie",
                "category" => "Fruits",
                "description" => "Apple pie is a baked dessert made with a pastry crust and a filling of sliced apples. The apples are typically seasoned with sugar, cinnamon, and other sweet spices, and the pie is baked until the crust is golden brown and the filling is bubbly.",
                "ingredient" => "Apples, Flour, Sugar, Butter, Salt, Cinnamon, Lemon juice, Egg (for an egg wash)",
                "instruction" => "
                1. Preheat your oven to 375°F (190°C).
                2. Roll out pie dough and press it into a pie dish.
                3. Peel, core, and slice apples.
                4. Mix apples with sugar, flour, and spices.
                5. Place the apple mixture in the pie dish.
                6. Cut slits in the top crust or create a lattice design.
                7. Brush the top with an egg wash.
                8. Bake for 45-50 minutes, or until the crust is golden brown.
                9. Serve warm with vanilla ice cream or whipped cream.",
                "calories" => 320.00,
                "carbs" => 47.00,
                "fat" => 15.00,
                "protein" => 2.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Watermelon Salad",
                "category" => "Fruits",
                "description" => "Watermelon salad is a refreshing summertime dish made with fresh watermelon, other fruits, and sometimes vegetables. It can be served as a side dish or as a main course, depending on the ingredients used.",
                "ingredient" => "Watermelon, Feta cheese, Mint leaves, Olive oil, and Balsamic vinegar",
                "instruction" => "
                1. Cut the watermelon into small cubes or balls using a melon baller or a sharp knife.
                2. Wash and chop any additional vegetables or fruits you want to add to the salad, such as tomatoes, cucumbers, onions, or berries.
                3. In a large mixing bowl, combine the watermelon and any additional vegetables or fruits.
                4. In a small bowl, whisk together a dressing of your choice, such as a citrus vinaigrette or a honey mustard dressing.
                5. Pour the dressing over the salad and toss to coat evenly.
                6. Serve the salad immediately, or refrigerate until ready to serve. Optionally, you can top the salad with nuts, seeds, or cheese for added crunch and flavor.",
                "calories" => 98.00,
                "carbs" => 13.00,
                "fat" => 5.10,
                "protein" => 1.60,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Almond Butter Toast",
                "category" => "Nuts and Seeds",
                "description" => "Almond butter toast is a simple and delicious breakfast or snack made by spreading almond butter on top of toasted bread. It can be served with a variety of toppings, such as sliced bananas, honey, or chia seeds.",
                "ingredient" => "Bread, Almond butter, Honey (optional), Fruits (optional)",
                "instruction" => "
                1. Toast bread to your desired level of doneness.
                2. Spread a layer of almond butter on the toast.
                3. Top with sliced fruit, such as bananas or strawberries.
                4. Sprinkle with a pinch of cinnamon, if desired.
                5. Enjoy your toast immediately, while it is still warm.",
                "calories" => 320.00,
                "carbs" => 38.00,
                "fat" => 16.00,
                "protein" => 11.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Chia Seed Pudding",
                "category" => "Nuts and Seeds",
                "description" => "Chia seed pudding is a nutritious, refreshing dessert made by soaking chia seeds in liquid (such as milk, coconut milk, or almond milk) until they become soft and gel-like, and then adding a sweetener (such as honey or maple syrup) and other ingredients (such as fruit, nuts, or spices) to taste.",
                "ingredient" => "Chia seeds, Milk or Plant-based milk of your choice, Sweetener of your choice (such as Honey, Maple syrup, or Agave syrup), Vanilla extract, and any additional mix-ins or Toppings of your choice (such as Fruit, Nuts, or Cacao nibs).",
                "instruction" => "
                1. In a medium bowl, whisk together 1 cup of milk (dairy or non-dairy), 1/4 cup of chia seeds, and any sweetener or flavorings you like (such as honey, maple syrup, vanilla extract, or cocoa powder).
                2. Cover the bowl with plastic wrap and refrigerate for at least 4 hours or overnight.
                3. When the pudding has set, whisk it again to break up any clumps. If the pudding is too thick, you can add a little more milk to thin it out.
                4. Serve the pudding chilled, garnished with your choice of toppings such as fresh fruit, nuts, and coconut.",
                "calories" => 152.00,
                "carbs" => 21.00,
                "fat" => 10.00,
                "protein" => 5.00,
                "serving_size" => 1,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ],

            [
                "name" => "Granola Bars with Nuts and Seeds",
                "category" => "Nuts and Seeds",
                "description" => "Granola Bars with Nuts and Seeds is a snack made from a mixture of oats, nuts, and seeds. It can be enjoyed as a breakfast or snack on the go.",
                "ingredient" => "Rolled oats, Honey or Maple syrup, Coconut oil, Vanilla extract, Salt, Nuts and Seeds of your choice (such as Almonds, Sunflower seeds, Pumpkin seeds, etc.), and any optional add-ins (such as Chocolate chips, Dried fruit, etc.)",
                "instruction" => "
                1. Preheat your oven to 350°F (180°C).
                2. In a medium bowl, mix together the rolled oats, chopped nuts, and seeds.
                3. In a small saucepan, melt together the honey, coconut oil, and brown sugar.
                4. Pour the wet mixture over the dry mixture and stir until well combined.
                5. Press the mixture into a 9x9-inch (23x23 cm) baking dish lined with parchment paper.
                6. Bake for 15-20 minutes, or until the edges are golden brown.
                7. Allow the granola bars to cool in the dish before cutting into bars.",
                "calories" => 190.00,
                "carbs" => 19.00,
                "fat" => 12.00,
                "protein" => 5.00,
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
