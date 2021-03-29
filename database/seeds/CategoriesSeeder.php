<?php

use Illuminate\Database\Seeder;
use App\Category;

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
            'description' => 'headphones',
            'slug' => 'headphones',
            'meta_title' => 'headphones',
            'meta_description' => 'headphones',
            'meta_keywords' => 'headphones'
        ]);

        // Begin Amplifiers

        DB::table('categories')->insert([
            'name' => 'Amplifiers',
            'parent_id' => 0,
            'description' => 'amplifiers',
            'slug' => 'amplifiers',
            'meta_title' => 'amplifiers',
            'meta_description' => 'amplifiers',
            'meta_keywords' => 'amplifiers'
        ]);

        // Begin Source
        
        DB::table('categories')->insert([
            'name' => 'Source',
            'parent_id' => 0,
            'description' => 'source',
            'slug' => 'source',
            'meta_title' => 'source',
            'meta_description' => 'source',
            'meta_keywords' => 'source'
        ]);

        DB::table('categories')->insert([
            'name' => 'In-Ears',
            'parent_id' => 0,
            'description' => 'in-ears',
            'slug' => 'in-ears',
            'meta_title' => 'in-ears',
            'meta_description' => 'in-ears',
            'meta_keywords' => 'in-ears'
        ]);

        DB::table('categories')->insert([
            'name' => 'Budget',
            'parent_id' => 0,
            'description' => 'budget',
            'slug' => 'budget',
            'meta_title' => 'budget',
            'meta_description' => 'budget',
            'meta_keywords' => 'budget'
        ]);
    
        DB::table('categories')->insert([
            'name' => 'Full Size',
            'parent_id' => 1,
            'description' => 'full-size',
            'slug' => 'full-size',
            'meta_title' => 'full-size',
            'meta_description' => 'full-size',
            'meta_keywords' => 'full-size'
        ]);

        DB::table('categories')->insert([
            'name' => 'Portables',
            'parent_id' => 1,
            'description' => 'portables',
            'slug' => 'portables',
            'meta_title' => 'portables',
            'meta_description' => 'portables',
            'meta_keywords' => 'portables'
        ]);

        DB::table('categories')->insert([
            'name' => 'Planars',
            'parent_id' => 1,
            'description' => 'planars',
            'slug' => 'planars',
            'meta_title' => 'planars',
            'meta_description' => 'planars',
            'meta_keywords' => 'planars'
        ]);

        DB::table('categories')->insert([
            'name' => 'Electrostatics',
            'parent_id' => 1,
            'description' => 'electrostatics',
            'slug' => 'electrostatics',
            'meta_title' => 'electrostatics',
            'meta_description' => 'electrostatics',
            'meta_keywords' => 'electrostatics'
        ]);

        DB::table('categories')->insert([
            'name' => 'Portable Amplifiers',
            'parent_id' => 2,
            'description' => 'portable-amplifiers',
            'slug' => 'portable-amplifiers',
            'meta_title' => 'portable-amplifiers',
            'meta_description' => 'portable-amplifiers',
            'meta_keywords' => 'portable-amplifiers'
        ]);

        DB::table('categories')->insert([
            'name' => 'Solid State Amplifiers',
            'parent_id' => 2,
            'description' => 'solid-state',
            'slug' => 'solid-state',
            'meta_title' => 'solid-state',
            'meta_description' => 'solid-state',
            'meta_keywords' => 'solid-state'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tube Amplifiers',
            'parent_id' => 2,
            'description' => 'tube-amplifiers',
            'slug' => 'tube-amplifiers',
            'meta_title' => 'tube-amplifiers',
            'meta_description' => 'tube-amplifiers',
            'meta_keywords' => 'tube-amplifiers'
        ]);


        DB::table('categories')->insert([
            'name' => 'Desktop Source',
            'parent_id' => 3,
            'description' => 'desktop-source',
            'slug' => 'desktop-source',
            'meta_title' => 'desktop-source',
            'meta_description' => 'desktop-source',
            'meta_keywords' => 'desktop-source'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Portable Source',
            'parent_id' => 3,
            'description' => 'portable-source',
            'slug' => 'portable-source',
            'meta_title' => 'portable-source',
            'meta_description' => 'portable-source',
            'meta_keywords' => 'portable-source'
        ]);

        DB::table('categories')->insert([
            'name' => 'Custom Monitors',
            'parent_id' => 4,
            'description' => 'custom-monitors',
            'slug' => 'custom-monitors',
            'meta_title' => 'custom-monitors',
            'meta_description' => 'custom-monitors',
            'meta_keywords' => 'custom-monitors'
        ]);

        DB::table('categories')->insert([
            'name' => 'Balanced Armature',
            'parent_id' => 4,
            'description' => 'balanced-armature-iems',
            'slug' => 'balanced-armature-iems',
            'meta_title' => 'balanced-armature-iems',
            'meta_description' => 'balanced-armature-iems',
            'meta_keywords' => 'balanced-armature-iems'
        ]);

        DB::table('categories')->insert([
            'name' => 'Dynamic',
            'parent_id' => 4,
            'description' => 'dynamic-iems',
            'slug' => 'dynamic-iems',
            'meta_title' => 'dynamic-iems',
            'meta_description' => 'dynamic-iems',
            'meta_keywords' => 'dynamic-iems'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hybrid Universal',
            'parent_id' => 4,
                'description' => 'hybrid-universal-iems',
            'slug' => 'hybrid-universal-iems',
                'meta_title' => 'hybrid-universal-iems',
                'meta_description' => 'hybrid-universal-iems',
                'meta_keywords' => 'hybrid-universal-iems'
        ]);

        DB::table('categories')->insert([
            'name' => 'Planar Magnetic',
            'parent_id' => 4,
            'description' => 'planar-magnetic-iems',
            'slug' => 'planar-magnetic-iems',
            'meta_title' => 'planar-magnetic-iems',
            'meta_description' => 'planar-magnetic-iems',
            'meta_keywords' => 'planar-magnetic-iems'
        ]);

        DB::table('categories')->insert([
            'name' => 'Wireless',
            'parent_id' => 4,
            'description' => 'wireless-iems',
            'slug' => 'wireless-iems',
            'meta_title' => 'wireless-iems',
            'meta_description' => 'wireless-iems',
            'meta_keywords' => 'wireless-iems'
        ]);

        //DB::table('categories')->insert([
        //    'name' => '$1000+',
        //    'parent_id' => 5,
        //    'description' => '1000',
        //    'slug' => '1000',
        //    'meta_title' => '1000',
        //    'meta_description' => '1000',
        //    'meta_keywords' => '1000'
        //]);
//
        //DB::table('categories')->insert([
        //    'name' => '$500 - $1000',
        //    'parent_id' => 5,
        //    'description' => '500-1000',
        //    'slug' => '500-1000',
        //    'meta_title' => '500-1000',
        //    'meta_description' => '500-1000',
        //    'meta_keywords' => '500-1000'
        //]);
//
        //DB::table('categories')->insert([
        //    'name' => '$401 - $500',
        //    'parent_id' => 5,
        //    'description' => '401-500',
        //    'slug' => '401-500',
        //    'meta_title' => '401-500',
        //    'meta_description' => '401-500',
        //    'meta_keywords' => '401-500'
        //]);
//
        //DB::table('categories')->insert([
        //    'name' => '$301 - $400',
        //    'parent_id' => 5,
        //    'description' => '301-400',
        //    'slug' => '301-400',
        //    'meta_title' => '301-400',
        //    'meta_description' => '301-400',
        //    'meta_keywords' => '301-400'
        //]);
//
        //DB::table('categories')->insert([
        //    'name' => '$201 - $300',
        //    'parent_id' => 5,
        //    'description' => '201-300',
        //    'slug' => '201-300',
        //    'meta_title' => '201-300',
        //    'meta_description' => '201-300',
        //    'meta_keywords' => '201-300'
        //]);
//
        //DB::table('categories')->insert([
        //    'name' => '$101 - $200',
        //    'parent_id' => 5,
        //    'description' => '101-200',
        //    'slug' => '101-200',
        //    'meta_title' => '101-200',
        //    'meta_description' => '101-200',
        //    'meta_keywords' => '101-200'
        //]);
//
        //DB::table('categories')->insert([
        //    'name' => '$100',
        //    'parent_id' => 5,
        //    'description' => '100',
        //    'slug' => '100',
        //    'meta_title' => '100',
        //    'meta_description' => '100',
        //    'meta_keywords' => '100'
        //]);

        $categories = Category::get();

        $categories->each(function ($category){ factory('App\Post', 5)->create(['category_id' => $category->id]); });
    }
}
