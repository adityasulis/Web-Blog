<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Aditya Sulistyo',
        //     'username' => 'adityasulis',
        //     'email' => 'aditya@gmail.com',
        //     'email_verified_at' => null,
        //     'password' => bcrypt('admin')
        // ]);
        // User::create([
        //     'name' => 'Sonya',
        //     'email' => 'sonya@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Learning Laravel in 1 week',
        //     'slug' => 'learning-laravel-in-1-week',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem. <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur optio, quae dolor, ullam praesentium quis laudantium fuga repudiandae eligendi eos porro odit at tenetur recusandae maxime quas vel consequuntur. Laborum aliquid molestias eum. Magni, nisi. Expedita veritatis, nesciunt cumque esse corrupti doloribus, dolorum numquam nisi ipsum ratione commodi, obcaecati distinctio!</p>
        //     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis debitis autem excepturi nemo repellat mollitia doloribus vel atque tenetur ex itaque culpa, possimus dolore necessitatibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptatem earum officia blanditiis provident eveniet temporibus facilis, animi odio autem totam libero quia explicabo cum necessitatibus, at accusamus optio ab nihil atque! Dolores, amet facere assumenda eum veritatis tenetur corporis? Id minima cum voluptatum nemo repudiandae unde aut ab maxime.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Is Golden Experience the Strongest Stand in Jojo Sequel?',
        //     'slug' => 'is-golden-experience-the-strongest-stand-in-jojo-sequel',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem. <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur optio, quae dolor, ullam praesentium quis laudantium fuga repudiandae eligendi eos porro odit at tenetur recusandae maxime quas vel consequuntur. Laborum aliquid molestias eum. Magni, nisi. Expedita veritatis, nesciunt cumque esse corrupti doloribus, dolorum numquam nisi ipsum ratione commodi, obcaecati distinctio!</p>
        //     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis debitis autem excepturi nemo repellat mollitia doloribus vel atque tenetur ex itaque culpa, possimus dolore necessitatibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptatem earum officia blanditiis provident eveniet temporibus facilis, animi odio autem totam libero quia explicabo cum necessitatibus, at accusamus optio ab nihil atque! Dolores, amet facere assumenda eum veritatis tenetur corporis? Id minima cum voluptatum nemo repudiandae unde aut ab maxime.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);



        // Post::create([
        //     'title' => 'Back end Web Programming Road Map',
        //     'slug' => 'back-end-web-programming-road-map',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem.<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur optio, quae dolor, ullam praesentium quis laudantium fuga repudiandae eligendi eos porro odit at tenetur recusandae maxime quas vel consequuntur. Laborum aliquid molestias eum. Magni, nisi. Expedita veritatis, nesciunt cumque esse corrupti doloribus, dolorum numquam nisi ipsum ratione commodi, obcaecati distinctio!</p>
        //     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis debitis autem excepturi nemo repellat mollitia doloribus vel atque tenetur ex itaque culpa, possimus dolore necessitatibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptatem earum officia blanditiis provident eveniet temporibus facilis, animi odio autem totam libero quia explicabo cum necessitatibus, at accusamus optio ab nihil atque! Dolores, amet facere assumenda eum veritatis tenetur corporis? Id minima cum voluptatum nemo repudiandae unde aut ab maxime.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Goku vs Saitama. Who will win?',
        //     'slug' => 'goku-vs-saitama-who-will-win',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, repellat magni. Fuga eveniet eum nostrum at vero quaerat a minus id perferendis voluptatum, ullam neque necessitatibus velit ipsum accusantium voluptatem, earum enim adipisci delectus dolorem.<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur optio, quae dolor, ullam praesentium quis laudantium fuga repudiandae eligendi eos porro odit at tenetur recusandae maxime quas vel consequuntur. Laborum aliquid molestias eum. Magni, nisi. Expedita veritatis, nesciunt cumque esse corrupti doloribus, dolorum numquam nisi ipsum ratione commodi, obcaecati distinctio!</p>
        //     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis debitis autem excepturi nemo repellat mollitia doloribus vel atque tenetur ex itaque culpa, possimus dolore necessitatibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptatem earum officia blanditiis provident eveniet temporibus facilis, animi odio autem totam libero quia explicabo cum necessitatibus, at accusamus optio ab nihil atque! Dolores, amet facere assumenda eum veritatis tenetur corporis? Id minima cum voluptatum nemo repudiandae unde aut ab maxime.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
