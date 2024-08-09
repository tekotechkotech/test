<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(KelasSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(OptionSeeder::class);
    }
}
