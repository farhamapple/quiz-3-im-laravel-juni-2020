<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Farham Harvianto',
                'email' => 'farhamapple@gmail.com',
                'passwd' => 'farham123'
            ],
        ]);
    }
}
