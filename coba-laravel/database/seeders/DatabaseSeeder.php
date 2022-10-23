<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Muhammad Advie Rifaldy',
            'username' => 'madvier',
            'email' => 'madvier83@gmail.com',
            'password' => bcrypt('wasdwasd')
        ]);
        // User::create([
        //     'name' => 'Muhammad Ihsan Rifaldy',
        //     'email' => 'czans@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-satu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem? Odio nam ea rerum quos vitae illum dolor officia soluta, tempore nihil dolorum, nesciunt temporibus vero, laboriosam vel ipsa. Quos, maiores assumenda beatae temporibus voluptatum quis consectetur quaerat laudantium voluptas aspernatur excepturi magni cupiditate eum modi culpa iusto quasi nihil dolorem,</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem? Odio nam ea rerum quos vitae illum dolor officia soluta, tempore nihil dolorum, nesciunt temporibus vero, laboriosam vel ipsa. Quos, maiores assumenda beatae temporibus voluptatum quis consectetur quaerat laudantium voluptas aspernatur excepturi magni cupiditate eum modi culpa iusto quasi nihil dolorem,</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ullam illum ea possimus, dolorum repudiandae, quaerat inventore quia ex voluptates dolorem? Odio nam ea rerum quos vitae illum dolor officia soluta, tempore nihil dolorum, nesciunt temporibus vero, laboriosam vel ipsa. Quos, maiores assumenda beatae temporibus voluptatum quis consectetur quaerat laudantium voluptas aspernatur excepturi magni cupiditate eum modi culpa iusto quasi nihil dolorem,</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p><p>itaque repellendus magnam. Molestiae autem aliquid sunt animi, quas distinctio amet vel voluptatem eos corrupti pariatur voluptas molestias officiis architecto provident explicabo magnam hic nisi, doloremque cumque blanditiis, laudantium reiciendis ullam. Autem accusamus voluptate sequi illo ratione fugiat odit cumque eligendi impedit. Pariatur ut, saepe iure voluptatibus consequatur animi? Hic ratione aut cupiditate eius fuga omnis iusto ipsum.</p>'
        // ]);
    }
}
