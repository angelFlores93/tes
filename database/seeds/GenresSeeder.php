<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Pop'
        ]);
        DB::table('genres')->insert([
            'name' => 'Rock'
        ]);
        DB::table('genres')->insert([
            'name' => 'Blues'
        ]);
        DB::table('genres')->insert([
            'name' => 'Jazz'
        ]);
        DB::table('genres')->insert([
            'name' => 'Country'
        ]);
    }
}
