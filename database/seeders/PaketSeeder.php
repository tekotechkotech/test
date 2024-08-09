<?php

namespace Database\Seeders;

use App\Models\Paket;
use App\Models\Soal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paket1 = Paket::create([
            'name' => 'Paket 1',
            'description' => 'Paket soal pertama'
        ]);

        $paket2 = Paket::create([
            'name' => 'Paket 2',
            'description' => 'Paket soal kedua'
        ]);

        $paket1->soals()->attach(Soal::all()->random(5)); // 5 soal untuk paket 1
        $paket2->soals()->attach(Soal::all()->random(5)); // 5 soal untuk paket 2
    
    }
}
