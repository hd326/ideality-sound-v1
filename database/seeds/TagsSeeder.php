<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'reviews',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('tags')->insert([
            'name' => 'blog',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);
    }
}
