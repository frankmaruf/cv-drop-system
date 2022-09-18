<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Chattagram',
            'Rajshahi',
            'Khulna',
            'Barisal',
            'Sylhet',
            'Dhaka',
            'Rangpur',
            'Mymensingh',
        ];
        foreach ($data as $division) {
            Division::create(['name' => $division]);
        }
    }
}
