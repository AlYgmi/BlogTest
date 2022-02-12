<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\

        // User::create([
        //     'name' => 'Adit',
        //     'email' => 'adiyat@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Uus',
        //     'email' => 'aasuus@gmail.com',
        //     'password' => bcrypt('12395')
        // ]);

        User::factory(3)->create();

        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'nama' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis optio sunt a?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quasi quo tempore tenetur, a provident possimus temporibus natus necessitatibus facilis, consequatur ipsa repellat repudiandae. Rerum porro fugit repellat quod laborum deserunt possimus blanditiis delectus ea, veniam qui error temporibus eius obcaecati commodi minus libero! Minus ratione eligendi natus commodi, cum tenetur ab sed nesciunt voluptates ducimus tempore doloribus suscipit sunt accusantium doloremque voluptas officia et iste neque earum deleniti nemo consectetur dolorem! Similique explicabo dolores rerum velit odit commodi natus amet, laudantium, numquam atque repellendus, blanditiis pariatur ratione expedita error culpa illo minus non vitae fugit ullam iste alias fuga.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis optio sunt a?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quasi quo tempore tenetur, a provident possimus temporibus natus necessitatibus facilis, consequatur ipsa repellat repudiandae. Rerum porro fugit repellat quod laborum deserunt possimus blanditiis delectus ea, veniam qui error temporibus eius obcaecati commodi minus libero! Minus ratione eligendi natus commodi, cum tenetur ab sed nesciunt voluptates ducimus tempore doloribus suscipit sunt accusantium doloremque voluptas officia et iste neque earum deleniti nemo consectetur dolorem! Similique explicabo dolores rerum velit odit commodi natus amet, laudantium, numquam atque repellendus, blanditiis pariatur ratione expedita error culpa illo minus non vitae fugit ullam iste alias fuga.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis optio sunt a?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quasi quo tempore tenetur, a provident possimus temporibus natus necessitatibus facilis, consequatur ipsa repellat repudiandae. Rerum porro fugit repellat quod laborum deserunt possimus blanditiis delectus ea, veniam qui error temporibus eius obcaecati commodi minus libero! Minus ratione eligendi natus commodi, cum tenetur ab sed nesciunt voluptates ducimus tempore doloribus suscipit sunt accusantium doloremque voluptas officia et iste neque earum deleniti nemo consectetur dolorem! Similique explicabo dolores rerum velit odit commodi natus amet, laudantium, numquam atque repellendus, blanditiis pariatur ratione expedita error culpa illo minus non vitae fugit ullam iste alias fuga.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis optio sunt a?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quasi quo tempore tenetur, a provident possimus temporibus natus necessitatibus facilis, consequatur ipsa repellat repudiandae. Rerum porro fugit repellat quod laborum deserunt possimus blanditiis delectus ea, veniam qui error temporibus eius obcaecati commodi minus libero! Minus ratione eligendi natus commodi, cum tenetur ab sed nesciunt voluptates ducimus tempore doloribus suscipit sunt accusantium doloremque voluptas officia et iste neque earum deleniti nemo consectetur dolorem! Similique explicabo dolores rerum velit odit commodi natus amet, laudantium, numquam atque repellendus, blanditiis pariatur ratione expedita error culpa illo minus non vitae fugit ullam iste alias fuga.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
