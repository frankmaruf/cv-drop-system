<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Exam;
use App\Models\University;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            'SSC',
            'HSC',
            "Diploma",
            "BSC",
            "MSC",
        ];
        foreach ($exams as $exam) {
            Exam::create(['name' => $exam]);
        }
        $universities = [
            'School One',
            'School Two',
            'Collage One',
            'Collage Two',
            "Uni One",
            "Uni Two",
            "Madrasha One",
            "Madrasha Two",
        ];
        foreach ($universities as $university) {
            University::create(['name' => $university]);
        }
        $boards = [
            'Comilla',
            'Chittagong',
            "UGC",
            "National",
            "BTEB",
            "Madrasha Board",
        ];
        foreach ($boards as $board) {
            Board::create(['name' => $board]);
        }
    }
}
