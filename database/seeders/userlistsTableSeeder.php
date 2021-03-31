<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userlists')->insert([
            [
                'name' => 'seed name',
                'email' => 'seed@seeder.com'

            ],[
                'name' => 'seed name 2',
                'email' => 'seed2@seeder.com'

            ],[
                'name' => 'seed name 3',
                'email' => 'seed3@seeder.com'

            ]
        ]);
    }
}
