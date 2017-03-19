<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Verse'
        ]);
        DB::table('types')->insert([
            'name' => 'Chorus'
        ]);
        DB::table('types')->insert([
            'name' => 'Prechorus'
        ]);
        DB::table('types')->insert([
            'name' => 'Bridge'
        ]);
    }
}
