<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->delete();
        User::create(array(
            'nama'     => 'user',
        ));
        User::create(array(
            'nama'     => 'admin',
        ));    
    }
}
