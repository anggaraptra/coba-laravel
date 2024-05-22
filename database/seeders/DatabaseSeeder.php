<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Anggara',
            'username' => 'anggaraptra',
            'email' => 'anggaraptra@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Putra',
        //     'email' => 'putra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, quo?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloribus explicabo dolorem suscipit odio voluptates quaerat quis sint dolore! Commodi, quia? Facere, harum ullam nesciunt doloremque assumenda porro corrupti exercitationem rerum quisquam vero saepe natus maxime ipsa incidunt earum necessitatibus ab dolorum nemo magnam, corporis illum a. Nulla eaque dolorum exercitationem alias odit autem tempore maiores quis error modi dignissimos velit, aspernatur aut animi, quia cumque esse pariatur inventore? Cumque, vel at, nobis earum reprehenderit ab aliquam consectetur magni eveniet itaque suscipit commodi obcaecati ullam. Suscipit, soluta error facere quod velit ratione corporis laboriosam quo esse? Voluptatem dicta impedit accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, quo?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloribus explicabo dolorem suscipit odio voluptates quaerat quis sint dolore! Commodi, quia? Facere, harum ullam nesciunt doloremque assumenda porro corrupti exercitationem rerum quisquam vero saepe natus maxime ipsa incidunt earum necessitatibus ab dolorum nemo magnam, corporis illum a. Nulla eaque dolorum exercitationem alias odit autem tempore maiores quis error modi dignissimos velit, aspernatur aut animi, quia cumque esse pariatur inventore? Cumque, vel at, nobis earum reprehenderit ab aliquam consectetur magni eveniet itaque suscipit commodi obcaecati ullam. Suscipit, soluta error facere quod velit ratione corporis laboriosam quo esse? Voluptatem dicta impedit accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, quo?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloribus explicabo dolorem suscipit odio voluptates quaerat quis sint dolore! Commodi, quia? Facere, harum ullam nesciunt doloremque assumenda porro corrupti exercitationem rerum quisquam vero saepe natus maxime ipsa incidunt earum necessitatibus ab dolorum nemo magnam, corporis illum a. Nulla eaque dolorum exercitationem alias odit autem tempore maiores quis error modi dignissimos velit, aspernatur aut animi, quia cumque esse pariatur inventore? Cumque, vel at, nobis earum reprehenderit ab aliquam consectetur magni eveniet itaque suscipit commodi obcaecati ullam. Suscipit, soluta error facere quod velit ratione corporis laboriosam quo esse? Voluptatem dicta impedit accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, quo?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloribus explicabo dolorem suscipit odio voluptates quaerat quis sint dolore! Commodi, quia? Facere, harum ullam nesciunt doloremque assumenda porro corrupti exercitationem rerum quisquam vero saepe natus maxime ipsa incidunt earum necessitatibus ab dolorum nemo magnam, corporis illum a. Nulla eaque dolorum exercitationem alias odit autem tempore maiores quis error modi dignissimos velit, aspernatur aut animi, quia cumque esse pariatur inventore? Cumque, vel at, nobis earum reprehenderit ab aliquam consectetur magni eveniet itaque suscipit commodi obcaecati ullam. Suscipit, soluta error facere quod velit ratione corporis laboriosam quo esse? Voluptatem dicta impedit accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
