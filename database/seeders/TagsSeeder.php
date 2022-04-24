<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();
        $tags = ['clothes', 'shoes', 'ladies', 'men', 'babies', 'school', 'travel', 'occasion', 'luxury'];

       collect($tags)->each(function($tag){
           Tag::create([
               'name' =>$tag,
           ]);
       });
    }
}
