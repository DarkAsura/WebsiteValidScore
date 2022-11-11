<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
           'name' => 'Budi',
           'score' => 50,
        ]);
        student::create([
            'name' => 'Andi',
            'score' => 70,
        ]);
        student::create([
            'name' => 'Sudi',
            'score' => 10,
        ]);
        student::create([
            'name' => 'Badi',
            'score' => 90,
        ]);
    }
}
