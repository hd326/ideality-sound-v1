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
            'meta_title' => 'Headphone Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on headphones both full-sized and portable, that can be found here in idealitysound',
            'meta_keywords' => 'headphones archives, idealitysound audio review'
        ]);

        // Begin Amplifiers

        DB::table('categories')->insert([
            'name' => 'Amplifiers',
            'parent_id' => 0,
            'description' => 'amplifiers',
            'slug' => 'amplifiers',
            'meta_title' => 'Amplifier Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on amplifiers both desktop and portable, that can be found here in idealitysound',
            'meta_keywords' => 'amplifier archives, idealitysound audio review'
        ]);

        // Begin Source
        
        DB::table('categories')->insert([
            'name' => 'Source',
            'parent_id' => 0,
            'description' => 'source',
            'slug' => 'source',
            'meta_title' => 'Source Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on digital-to-analog converters both full-sized and portable, that can be found here in idealitysound',
            'meta_keywords' => 'source archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'In-Ears',
            'parent_id' => 0,
            'description' => 'in-ears',
            'slug' => 'in-ears',
            'meta_title' => 'In-Ears Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on in-ear iem, that can be found here in idealitysound',
            'meta_keywords' => 'in ears archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Full Size',
            'parent_id' => 1,
            'description' => 'full-size',
            'slug' => 'full-size',
            'meta_title' => 'Full Size Headphone Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on full-sized headphones, that can be found here in idealitysound',
            'meta_keywords' => 'full size headphone archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Portables',
            'parent_id' => 1,
            'description' => 'portables',
            'slug' => 'portables',
            'meta_title' => 'Portable Headphone Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on portable headphones, that can be found here in idealitysound',
            'meta_keywords' => 'portable headphone archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Planars',
            'parent_id' => 1,
            'description' => 'planars',
            'slug' => 'planars',
            'meta_title' => 'Planar Headphones Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on planar magnetic headphones, that can be found here in idealitysound',
            'meta_keywords' => 'planar headphones archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Electrostatics',
            'parent_id' => 1,
            'description' => 'electrostatics',
            'slug' => 'electrostatics',
            'meta_title' => 'Electrostatic Headphone Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on electro-static headphones, that can be found here in idealitysound',
            'meta_keywords' => 'electrostatic archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Portable Amplifiers',
            'parent_id' => 2,
            'description' => 'portable-amplifiers',
            'slug' => 'portable-amplifiers',
            'meta_title' => 'Portable Amplifier Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on portable amplifiers, that can be found here in idealitysound',
            'meta_keywords' => 'portable amplifier archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Solid State Amplifiers',
            'parent_id' => 2,
            'description' => 'solid-state',
            'slug' => 'solid-state',
            'meta_title' => 'Solid State Amplifier Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on solid state amplifiers, that can be found here in idealitysound',
            'meta_keywords' => 'solid state archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tube Amplifiers',
            'parent_id' => 2,
            'description' => 'tube-amplifiers',
            'slug' => 'tube-amplifiers',
            'meta_title' => 'Tube Amplifier Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on tube amplifiers, that can be found here in idealitysound',
            'meta_keywords' => 'tube amplifier archives, idealitysound audio review'
        ]);


        DB::table('categories')->insert([
            'name' => 'Desktop Source',
            'parent_id' => 3,
            'description' => 'desktop-source',
            'slug' => 'desktop-source',
            'meta_title' => 'Desktop Source Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on desktop sources, that can be found here in idealitysound',
            'meta_keywords' => 'desktop source archives, idealitysound audio review'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Portable Source',
            'parent_id' => 3,
            'description' => 'portable-source',
            'slug' => 'portable-source',
            'meta_title' => 'Portable Source Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on portable sources, that can be found here in idealitysound',
            'meta_keywords' => 'portable source archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Custom Monitors',
            'parent_id' => 4,
            'description' => 'custom-monitors',
            'slug' => 'custom-monitors',
            'meta_title' => 'Custom Monitor Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on custom monitors, that can be found here in idealitysound',
            'meta_keywords' => 'custom monitors archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Balanced Armature',
            'parent_id' => 4,
            'description' => 'balanced-armature-iems',
            'slug' => 'balanced-armature-iems',
            'meta_title' => 'Balanced Armature IEM Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on balanced armature iems, that can be found here in idealitysound',
            'meta_keywords' => 'balanced armature iems archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Dynamic',
            'parent_id' => 4,
            'description' => 'dynamic-iems',
            'slug' => 'dynamic-iems',
            'meta_title' => 'Dynamic IEMs Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on dynamic iems, that can be found here in idealitysound',
            'meta_keywords' => 'dynamic iem archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hybrid Universal',
            'parent_id' => 4,
            'description' => 'hybrid-universal-iems',
            'slug' => 'hybrid-universal-iems',
            'meta_title' => 'Hybrid Universal IEM Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on hybrid universal iems, that can be found here in idealitysound',
            'meta_keywords' => 'hybrid universal iem archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Planar Magnetic',
            'parent_id' => 4,
            'description' => 'planar-magnetic-iems',
            'slug' => 'planar-magnetic-iems',
            'meta_title' => 'Planar Magnetic IEM Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on planar magnetic iems, that can be found here in idealitysound',
            'meta_keywords' => 'planar magnetic iem archives, idealitysound audio review'
        ]);

        DB::table('categories')->insert([
            'name' => 'Wireless',
            'parent_id' => 4,
            'description' => 'wireless-iems',
            'slug' => 'wireless-iems',
            'meta_title' => 'Wireless IEM Archives | idealitysound Audio Reviews',
            'meta_description' => 'We have a collection of reviews on wireless iems, that can be found here in idealitysound',
            'meta_keywords' => 'wireless iem archives, idealitysound audio review'
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

        //$categories = Category::get();
        //$categories->each(function ($category){ factory('App\Post', 5)->create(['category_id' => $category->id]); });
    }
}
