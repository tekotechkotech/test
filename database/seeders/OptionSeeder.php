<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Soal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soals = Soal::all();

        foreach ($soals as $soal) {
            for ($i = 1; $i <= 3; $i++) { // 3 pilihan per soal
                Option::create([
                    'soal_id' => $soal->id,
                    'option_text' => "Pilihan $i untuk soal {$soal->id}"
                ]);
            }
        }
    }
}
