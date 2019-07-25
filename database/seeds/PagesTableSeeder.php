<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('pages')->insert([[
            'title'=>'About Page',
            'slug'=>'about',
            'content'=>'This is About pages',
       ],
           [
               'title'=>'Blog Page',
               'slug'=>'blog',
               'content'=>'This is Blog pages',
           ],
           [
               'title'=>'Contact Page',
               'slug'=>'contact',
               'content'=>'This is Contact page',
           ]
       ]);
    }
}
