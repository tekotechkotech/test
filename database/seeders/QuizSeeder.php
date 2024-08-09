<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Paket;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas1 = Kelas::find(1);
        $kelas2 = Kelas::find(2);

        $paket1 = Paket::find(1);
        $paket2 = Paket::find(2);

        $quiz1 = Quiz::create([
            'title' => 'Quiz 1',
            'description' => 'Quiz pertama',
            'start_time' => now(),
            'end_time' => now()->addHour(),
        ]);

        $quiz2 = Quiz::create([
            'title' => 'Quiz 2',
            'description' => 'Quiz kedua',
            'start_time' => now()->addDays(1),
            'end_time' => now()->addDays(1)->addHour(),
        ]);

        $quiz3 = Quiz::create([
            'title' => 'Quiz 3',
            'description' => 'Quiz ketiga',
            'start_time' => now()->addDays(2),
            'end_time' => now()->addDays(2)->addHour(),
        ]);

        // Assign Paket ke Quiz
        $quiz1->pakets()->attach($paket1);
        $quiz2->pakets()->attach($paket2);
        $quiz3->pakets()->attach($paket1);

        // Assign Kelas ke Quiz
        $quiz1->kelas()->attach($kelas1);
        $quiz2->kelas()->attach([$kelas1->id, $kelas2->id]);
        $quiz3->kelas()->attach($kelas2);
    }
}
