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
            'name' => 'CanJam Reports',
            'slug' => 'canjam-reports',
            'meta_title' => 'canjam reports',
            'meta_description' => 'canjam reports',
            'meta_keywords' => 'canjam reports'
        ]);

        DB::table('tags')->insert([
            'name' => 'Review',
            'slug' => 'review',
            'meta_title' => 'review',
            'meta_description' => 'review',
            'meta_keywords' => 'review'
        ]);

        DB::table('tags')->insert([
            'name' => 'Blog',
            'slug' => 'blog',
            'meta_title' => 'blog',
            'meta_description' => 'blog',
            'meta_keywords' => 'blog'
        ]);
        
        DB::table('tags')->insert([
            'name' => '$1000+',
            'slug' => '1000',
            'meta_title' => '1000',
            'meta_description' => '1000',
            'meta_keywords' => '1000'
        ]);

        DB::table('tags')->insert([
            'name' => '$500 - $1000',
            'slug' => '500-1000',
            'meta_title' => '500-1000',
            'meta_description' => '500-1000',
            'meta_keywords' => '500-1000'
        ]);
        
        DB::table('tags')->insert([
            'name' => '$401 - $500',
            'slug' => '401-500',
            'meta_title' => '401-500',
            'meta_description' => '401-500',
            'meta_keywords' => '401-500'
        ]);

        DB::table('tags')->insert([
            'name' => '$301 - $400',
            'slug' => '301-400',
            'meta_title' => '301-400',
            'meta_description' => '301-400',
            'meta_keywords' => '301-400'
        ]);

        DB::table('tags')->insert([
            'name' => '$201 - $300',
            'slug' => '201-300',
            'meta_title' => '201-300',
            'meta_description' => '201-300',
            'meta_keywords' => '201-300'
        ]);

        DB::table('tags')->insert([
            'name' => '$101 - $200',
            'slug' => '101-200',
            'meta_title' => '101-200',
            'meta_description' => '101-200',
            'meta_keywords' => '101-200'
        ]);

        DB::table('tags')->insert([
            'name' => '$100',
            'slug' => '100',
            'meta_title' => '100',
            'meta_description' => '100',
            'meta_keywords' => '100'
        ]);


    }
}
