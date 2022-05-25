<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
      

        User::create([
            'name'     => 'Satrio Setiawan',
            'username' => 'tiosetiawan',
            'email'    => 'tio@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory(4)->create();
        // User::create([
        //     'name'     => 'Oke Setiawan',
        //     'email'    => 'oke@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        \App\Models\Post::factory(20)->create();

        // Post::create([
        //     'title'       => 'Judul Pertama',
        //     'slug'        => 'judul-pertama',
        //     'excerpt'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cum eveniet corrupti consequatur adipisci! Praesentium tempore eius voluptas debitis eaque officia id sapiente odit, voluptatum quis temporibus veniam dicta. Error?',
        //     'body'        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero dolorum sit quasi aliquid, adipisci laudantium distinctio iste aperiam illo blanditiis reprehenderit laboriosam recusandae at corporis nemo id nesciunt debitis? Molestias assumenda repudiandae nam repellendus totam, provident deleniti omnis ullam sed, ipsam quo voluptatem nulla officiis odit neque libero incidunt sequi. Molestiae amet at nobis, nulla odit minima error, laboriosam esse libero sint voluptas non dolorum. Consequatur eius rem nam sint temporibus alias doloribus odio, corporis a doloremque quis incidunt ea, laboriosam iusto cupiditate consequuntur molestiae? Rerum ratione eveniet quidem tempora ab, impedit magnam. Obcaecati illum aspernatur eveniet vitae neque?',
        //     'category_id' => '1',
        //     'user_id'     => '1',
        // ]);

        // Post::create([
        //     'title'       => 'Judul Kedua',
        //     'slug'        => 'judul-kedua',
        //     'excerpt'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cum eveniet corrupti consequatur adipisci! Praesentium tempore eius voluptas debitis eaque officia id sapiente odit, voluptatum quis temporibus veniam dicta. Error?',
        //     'body'        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero dolorum sit quasi aliquid, adipisci laudantium distinctio iste aperiam illo blanditiis reprehenderit laboriosam recusandae at corporis nemo id nesciunt debitis? Molestias assumenda repudiandae nam repellendus totam, provident deleniti omnis ullam sed, ipsam quo voluptatem nulla officiis odit neque libero incidunt sequi. Molestiae amet at nobis, nulla odit minima error, laboriosam esse libero sint voluptas non dolorum. Consequatur eius rem nam sint temporibus alias doloribus odio, corporis a doloremque quis incidunt ea, laboriosam iusto cupiditate consequuntur molestiae? Rerum ratione eveniet quidem tempora ab, impedit magnam. Obcaecati illum aspernatur eveniet vitae neque?',
        //     'category_id' => '2',
        //     'user_id'     => '1',
        // ]);

        // Post::create([
        //     'title'       => 'Judul Ketiga',
        //     'slug'        => 'judul-ketiga',
        //     'excerpt'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit cum eveniet corrupti consequatur adipisci! Praesentium tempore eius voluptas debitis eaque officia id sapiente odit, voluptatum quis temporibus veniam dicta. Error?',
        //     'body'        => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero dolorum sit quasi aliquid, adipisci laudantium distinctio iste aperiam illo blanditiis reprehenderit laboriosam recusandae at corporis nemo id nesciunt debitis? Molestias assumenda repudiandae nam repellendus totam, provident deleniti omnis ullam sed, ipsam quo voluptatem nulla officiis odit neque libero incidunt sequi. Molestiae amet at nobis, nulla odit minima error, laboriosam esse libero sint voluptas non dolorum. Consequatur eius rem nam sint temporibus alias doloribus odio, corporis a doloremque quis incidunt ea, laboriosam iusto cupiditate consequuntur molestiae? Rerum ratione eveniet quidem tempora ab, impedit magnam. Obcaecati illum aspernatur eveniet vitae neque?',
        //     'category_id' => '2',
        //     'user_id'     => '2',
        // ]);
    }
}

