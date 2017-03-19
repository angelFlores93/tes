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
        DB::table('progression_type')->insert([
            'progression_id' => 1,
            'type_id' => 1,
            'progression' => 'I-ii-iii-IV'
        ]);
        DB::table('progression_type')->insert([
            'progression_id' => 1,
            'type_id' => 2,
            'progression' => 'I-ii-iii-IV'
        ]);
        DB::table('progression_type')->insert([
            'progression_id' => 1,
            'type_id' => 3,
            'progression' => 'I-ii-iii-IV'
        ]);
    }
}
