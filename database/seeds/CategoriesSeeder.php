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
        // Begin Headphones
        DB::table('categories')->insert([
            'name' => 'Headphones',
            'parent_id' => 0,
            'description' => 'test',
            'slug' => 'headphones',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        // Begin Amplifiers

        DB::table('categories')->insert([
            'name' => 'Amplifiers',
            'parent_id' => 0,
            'description' => 'test',
            'slug' => 'amplifiers',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        // Begin Source
        
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
            'name' => 'Full Size',
            'parent_id' => 1,
            'description' => 'test',
            'slug' => 'fullsize',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Portables',
            'parent_id' => 1,
            'description' => 'test',
            'slug' => 'portables',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Planars',
            'parent_id' => 1,
            'description' => 'test',
            'slug' => 'planars',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Electrostatics',
            'parent_id' => 1,
            'description' => 'test',
            'slug' => 'electrostatics',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Portable Amplifiers',
            'parent_id' => 2,
            'description' => 'test',
            'slug' => 'portable-amplifiers',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Solid State Amplifiers',
            'parent_id' => 2,
            'description' => 'test',
            'slug' => 'solid-state',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tube Amplifiers',
            'parent_id' => 2,
            'description' => 'test',
            'slug' => 'tube-amplifiers',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);


        DB::table('categories')->insert([
            'name' => 'Desktop Source',
            'parent_id' => 3,
            'description' => 'test',
            'slug' => 'desktop-source',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Portable Source',
            'parent_id' => 3,
            'description' => 'test',
            'slug' => 'portable-source',
            'meta_title' => 'test',
            'meta_description' => 'test',
            'meta_keywords' => 'test'
        ]);
    }
}
