<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shops')->insert([
        'name' => "The Fresh Cut",
        'description' => 'The fresh Cut description.'
      ]);
    }
}
