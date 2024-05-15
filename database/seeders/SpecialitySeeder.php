<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialities = ['Umum', 'Penyakit Dalam', 'Anak', 'Saraf', 'Kandungan dan Ginekologi', 'Bedah', 'Kulit dan Kelamin', 'THT', 'Mata'];

        foreach ($specialities as $specialty) {
            Speciality::create(['name' => $specialty]);
        }
    }
}
