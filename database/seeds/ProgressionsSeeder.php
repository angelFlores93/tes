<?php

use Illuminate\Database\Seeder;

class ProgressionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('progressions')->insert([
            'name' => 'Progression 1',
            'id_user' => 1,
            'id_genre' => 1,
            'id_key' => 1
        ]);
    }
}
