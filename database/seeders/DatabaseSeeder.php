<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@ndesoo.com',
            'password' => bcrypt('admin'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
