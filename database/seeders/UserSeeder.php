<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'sampleuser',
            'no_hp'     => '081234567890',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('123456'),
        ));
    }
}
