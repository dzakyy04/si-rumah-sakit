<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Female Doctors
        Doctor::create([
            'name' => 'Dr. Angelina Jolie, Sp.A',
            'gender' => 'Female',
            'speciality' => 'Anak',
            'email' => 'angelina.jolie@gmail.com',
            'phone_number' => '081234567890',
            'address' => 'Jl. Sudirman No. 123, Palembang',
            'photo' => asset('images/doctors/female-doctor1.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Emma Watson',
            'gender' => 'Female',
            'speciality' => 'Umum',
            'email' => 'emma.watson@gmail.com',
            'phone_number' => '081234567891',
            'address' => 'Jl. Ahmad Yani No. 45, Palembang',
            'photo' => asset('images/doctors/female-doctor2.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Jennifer Lopez Sp.S',
            'gender' => 'Female',
            'speciality' => 'Saraf',
            'email' => 'jennifer.lopez@gmail.com',
            'phone_number' => '081234567892',
            'address' => 'Jl. Imam Bonjol No. 56, Palembang',
            'photo' => asset('images/doctors/female-doctor3.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Serena Williams, Sp.THT-KL',
            'gender' => 'Female',
            'speciality' => 'THT',
            'email' => 'serena.williams@gmail.com',
            'phone_number' => '081234567896',
            'address' => 'Jl. S. Parman No. 34, Palembang',
            'photo' => asset('images/doctors/female-doctor4.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Beyoncé Knowles, Sp.OT',
            'gender' => 'Female',
            'speciality' => 'Orthopedi',
            'email' => 'beyonce.knowles@gmail.com',
            'phone_number' => '081234567897',
            'address' => 'Jl. Tanjung No. 21, Palembang',
            'photo' => asset('images/doctors/female-doctor5.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Taylor Swift, Sp.OG',
            'gender' => 'Female',
            'speciality' => 'Kandungan',
            'email' => 'taylor.swift@gmail.com',
            'phone_number' => '081234567898',
            'address' => 'Jl. Veteran No. 99, Palembang',
            'photo' => asset('images/doctors/female-doctor6.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Rihanna, Sp.B',
            'gender' => 'Female',
            'speciality' => 'Bedah',
            'email' => 'rihanna@gmail.com',
            'phone_number' => '081234567899',
            'address' => 'Jl. Kartini No. 76, Palembang',
            'photo' => asset('images/doctors/female-doctor7.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Olivia Rodrigo, Sp.OG',
            'gender' => 'Female',
            'speciality' => 'Kandungan',
            'email' => 'olivia.rodrigo@gmail.com',
            'phone_number' => '081234567899',
            'address' => 'Jl. Basuki Rahmat, Palembang',
            'photo' => asset('images/doctors/female-doctor8.jpg')
        ]);

        // Male Doctors
        Doctor::create([
            'name' => 'Dr. Lionel Messi, Sp.S',
            'gender' => 'Male',
            'speciality' => 'Saraf',
            'email' => 'lionel.messi@gmail.com',
            'phone_number' => '081234567893',
            'address' => 'Jl. Diponegoro No. 67, Palembang',
            'photo' => asset('images/doctors/male-doctor1.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Cristiano Ronaldo, Sp.PD',
            'gender' => 'Male',
            'speciality' => 'Penyakit Dalam',
            'email' => 'cristiano.ronaldo@gmail.com',
            'phone_number' => '081234567894',
            'address' => 'Jl. Kapten A. Rivai No. 78, Palembang',
            'photo' => asset('images/doctors/male-doctor2.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. David Beckham, Sp.THT-KL',
            'gender' => 'Male',
            'speciality' => 'THT',
            'email' => 'david.beckham@gmail.com',
            'phone_number' => '081234567895',
            'address' => 'Jl. Jenderal Sudirman No. 90, Palembang',
            'photo' => asset('images/doctors/male-doctor3.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Leonardo DiCaprio, Sp.OT',
            'gender' => 'Male',
            'speciality' => 'Orthopedi',
            'email' => 'leonardo.dicaprio@gmail.com',
            'phone_number' => '081234567810',
            'address' => 'Jl. Ganesha No. 54, Palembang',
            'photo' => asset('images/doctors/male-doctor4.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Will Smith, Sp.OG',
            'gender' => 'Male',
            'speciality' => 'Kandungan',
            'email' => 'will.smith@gmail.com',
            'phone_number' => '081234567811',
            'address' => 'Jl. Pahlawan No. 22, Palembang',
            'photo' => asset('images/doctors/male-doctor5.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Tom Cruise, Sp.B',
            'gender' => 'Male',
            'speciality' => 'Bedah',
            'email' => 'tom.cruise@gmail.com',
            'phone_number' => '081234567812',
            'address' => 'Jl. Majapahit No. 63, Palembang',
            'photo' => asset('images/doctors/male-doctor6.jpg')
        ]);

        Doctor::create([
            'name' => 'Dr. Brad Pitt',
            'gender' => 'Male',
            'speciality' => 'Umum',
            'email' => 'brad.pitt@gmail.com',
            'phone_number' => '081234567813',
            'address' => 'Jl. Jend. Gatot Subroto No. 88, Palembang',
            'photo' => asset('images/doctors/male-doctor7.jpg')
        ]);
    }
}
