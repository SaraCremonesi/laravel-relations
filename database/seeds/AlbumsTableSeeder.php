<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
       for ($i=0; $i < 3; $i++) {
         $new_album = new Album();
         $new_album->title = $faker->word;
         $new_album->artist = $faker->name;
         $new_album->year = $faker->year();
         $new_album->genre = $faker->randomElement(
           [
             'reggae',
             'pop',
             'rock',
             'blues',
             'country',
             'classical',
             'metal'
           ]
         );
         $new_album->save();
       }
     }
}
