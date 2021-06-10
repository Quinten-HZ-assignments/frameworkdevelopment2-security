<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Quinten van Hoegee(admin)',
            'email' => 'hoeg0001@hz.nl',
            'password' => bcrypt('Admin12345!'),
            'email_verified_at' => Now(),
            'admin' => true
        ]);

        DB::table('users')->insert([
            'name' => 'Quinten van Hoegee(non-admin)',
            'email' => 'hoeg0002@hz.nl',
            'password' => bcrypt('Admin12345!'),
            'email_verified_at' => Now(),
            'admin' => false
        ]);
    }
}
