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
        $this->call(UserSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(KeysSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(ProgressionsSeeder::class);
        $this->call(ProgressionsTypesSeeder::class);
    }
}
