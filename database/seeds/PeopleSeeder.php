<?php

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $i ) {
            DB::table('people')->insert([
                'name' => str_random(10),
                'mail' => str_random(10).'@test.com',
                'age' => rand(0, 100),
            ]);
        }
    }
}
