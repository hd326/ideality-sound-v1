<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Amplifiers',
            'parent_id' => 0,
            'description' => 'test',
            'slug' => 'amplifiers',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Source',
            'parent_id' => 0,
            'description' => 'test',
            'slug' => 'source',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Desktop Amplifiers',
            'parent_id' => 1,
            'description' => 'test',
            'slug' => 'desktop-amplifiers',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        
        DB::table('categories')->insert([
            'name' => 'Portable Amplifiers',
            'parent_id' => 1,
            'description' => 'test',
            'slug' => 'portable-amplifiers',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Desktop Source',
            'parent_id' => 2,
            'description' => 'test',
            'slug' => 'desktop-source',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Portable Source',
            'parent_id' => 2,
            'description' => 'test',
            'slug' => 'portable-source',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

    }
}
