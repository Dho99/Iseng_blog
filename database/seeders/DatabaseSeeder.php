<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //     'name' => 'Ridho',
        //     'email' => 'yahahah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Garox',
        //     'email' => 'anjime@gmail.com',
        //     'password' => bcrypt('69style')
        // ]);

        User::factory(6)->create();


        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web-design',
            'slug' => 'web-design',

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, excepturi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit laboriosam hic, fuga at in esse necessitatibus eaque pariatur ut. Quaerat tempora magni esse quos ut consequatur nostrum ipsam ea aspernatur, sed tenetur nobis praesentium asperiores sapiente architecto vitae voluptates quibusdam commodi harum labore voluptatem odit quo sequi. Assumenda quia, voluptates similique architecto aspernatur maxime cum nulla nihil quas odio beatae blanditiis alias ipsam laudantium, a, inventore doloribus aperiam! Deleniti inventore fuga, libero voluptatum laborum nisi tempora debitis expedita doloribus commodi quidem eveniet praesentium ea explicabo tempore sint. Dicta quaerat repellat similique. Laboriosam possimus adipisci facere ipsa dolores labore magnam!',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, excepturi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit laboriosam hic, fuga at in esse necessitatibus eaque pariatur ut. Quaerat tempora magni esse quos ut consequatur nostrum ipsam ea aspernatur, sed tenetur nobis praesentium asperiores sapiente architecto vitae voluptates quibusdam commodi harum labore voluptatem odit quo sequi. Assumenda quia, voluptates similique architecto aspernatur maxime cum nulla nihil quas odio beatae blanditiis alias ipsam laudantium, a, inventore doloribus aperiam! Deleniti inventore fuga, libero voluptatum laborum nisi tempora debitis expedita doloribus commodi quidem eveniet praesentium ea explicabo tempore sint. Dicta quaerat repellat similique. Laboriosam possimus adipisci facere ipsa dolores labore magnam!',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, excepturi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit laboriosam hic, fuga at in esse necessitatibus eaque pariatur ut. Quaerat tempora magni esse quos ut consequatur nostrum ipsam ea aspernatur, sed tenetur nobis praesentium asperiores sapiente architecto vitae voluptates quibusdam commodi harum labore voluptatem odit quo sequi. Assumenda quia, voluptates similique architecto aspernatur maxime cum nulla nihil quas odio beatae blanditiis alias ipsam laudantium, a, inventore doloribus aperiam! Deleniti inventore fuga, libero voluptatum laborum nisi tempora debitis expedita doloribus commodi quidem eveniet praesentium ea explicabo tempore sint. Dicta quaerat repellat similique. Laboriosam possimus adipisci facere ipsa dolores labore magnam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, excepturi?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit laboriosam hic, fuga at in esse necessitatibus eaque pariatur ut. Quaerat tempora magni esse quos ut consequatur nostrum ipsam ea aspernatur, sed tenetur nobis praesentium asperiores sapiente architecto vitae voluptates quibusdam commodi harum labore voluptatem odit quo sequi. Assumenda quia, voluptates similique architecto aspernatur maxime cum nulla nihil quas odio beatae blanditiis alias ipsam laudantium, a, inventore doloribus aperiam! Deleniti inventore fuga, libero voluptatum laborum nisi tempora debitis expedita doloribus commodi quidem eveniet praesentium ea explicabo tempore sint. Dicta quaerat repellat similique. Laboriosam possimus adipisci facere ipsa dolores labore magnam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
