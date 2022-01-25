<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'BFS Admin',
            'email' => 'admin@bfs.com',
            'password' => '$2y$10$NiRUiorCUFAUN4UhO2jcSOARL8Hwoik.CBpBg6Z4QKTp4ZL4wbiie',
        ]);
    }
}
