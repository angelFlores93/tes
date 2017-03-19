<?php

use Illuminate\Database\Seeder;

class ProgressionsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progressions_types')->insert([
            'id_progression' => 1,
            'id_type' => 1
        ]);
        DB::table('progressions_types')->insert([
            'id_progression' => 1,
            'id_type' => 2
        ]);
        DB::table('progressions_types')->insert([
            'id_progression' => 1,
            'id_type' => 3
        ]);
    }
}
