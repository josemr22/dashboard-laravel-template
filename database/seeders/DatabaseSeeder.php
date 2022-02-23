<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::create([
        //     'name' => "Administrador",
        //     'email' => "admin@gmail.com",
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);
        User::factory()->create([
            'name' => "Administrador",
            'email' => "admin@gmail.com",
            'password' => bcrypt('pass98765')
        ]);
        $this->call([
            ArbitratorSeeder::class,
        ]);
    }
}
