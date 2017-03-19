<?php

use Illuminate\Database\Seeder;

class KeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keys')->insert([
            'name' => 'C'
        ]);
        DB::table('keys')->insert([
            'name' => 'C#/Db'
        ]);
        DB::table('keys')->insert([
            'name' => 'D'
        ]);
        DB::table('keys')->insert([
            'name' => 'D#/Eb'
        ]);
        DB::table('keys')->insert([
            'name' => 'E'
        ]);
        DB::table('keys')->insert([
            'name' => 'F'
        ]);
        DB::table('keys')->insert([
            'name' => 'F#/Gb'
        ]);
        DB::table('keys')->insert([
            'name' => 'G'
        ]);
        DB::table('keys')->insert([
            'name' => 'G#/Ab'
        ]);
        DB::table('keys')->insert([
            'name' => 'A'
        ]);
        DB::table('keys')->insert([
            'name' => 'A#/Bb'
        ]);
        DB::table('keys')->insert([
            'name' => 'B'
        ]);
    }
}
