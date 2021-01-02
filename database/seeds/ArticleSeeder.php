<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'category_id' => 2,
            'title' => $title = 'Commodi voluptatem recusandae reiciendis dolor.',
            'header_image' => 'https://lorempixel.com/800/400/cats/Orhan ',
            'main_image' => 'https://lorempixel.com/800/400/cats/Orhan ',
            'body' => 'Voluptatem aut praesentium deleniti sed. Officia officiis aut harum recusandae voluptatibus quia voluptatum. Aut quia laborum numquam omnis. Ad sed et asperiores voluptates odit. Non et temporibus sint voluptate ipsum.',
            'short_info' => 'Non et temporibus sint voluptate ipsum.',
            'tags' => 'tag1,tag2',
            'author_id'=>1,
            'hit' => 50,
            'slug' => $title,
            'created_at' => '2020-08-05 23:59:14',
            'updated_at' => '2020-08-05 23:59:14',

        ]);
    }
}
