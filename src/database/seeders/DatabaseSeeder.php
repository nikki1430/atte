<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Work;
use App\Models\Rest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(WorkTableSeeder::class);
        $this->call(RestTableSeeder::class);
    }
}
