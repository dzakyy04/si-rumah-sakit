<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        // Female Doctors
        Doctor::create([
            'name' => 'dr. Angelina Jolie',
            'gender' => 'Female',
            'speciality_id' => 1,
            'email' => 'jolie@gmail.com',
            'phone_number' => '081234567890',
            'photo' => asset('images/doctors/female-doctor1.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Emma Watson, Sp.PD',
            'gender' => 'Female',
            'speciality_id' => 2,
            'email' => 'emma@gmail.com',
            'phone_number' => '081234567891',
            'photo' => asset('images/doctors/female-doctor2.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Jennifer Lopez Sp.A',
            'gender' => 'Female',
            'speciality_id' => 3,
            'email' => 'jennifer@gmail.com',
            'phone_number' => '081234567892',
            'photo' => asset('images/doctors/female-doctor3.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Zendaya, Sp.N',
            'gender' => 'Female',
            'speciality_id' => 4,
            'email' => 'zendaya@gmail.com',
            'phone_number' => '081234567896',
            'photo' => asset('images/doctors/female-doctor4.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Beyoncé Knowles, Sp.OG',
            'gender' => 'Female',
            'speciality_id' => 5,
            'email' => 'beyonce@gmail.com',
            'phone_number' => '081234567897',
            'photo' => asset('images/doctors/female-doctor5.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Taylor Swift, Sp.B',
            'gender' => 'Female',
            'speciality_id' => 6,
            'email' => 'swift@gmail.com',
            'phone_number' => '081234567898',
            'photo' => asset('images/doctors/female-doctor6.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Rihanna, Sp.KK',
            'gender' => 'Female',
            'speciality_id' => 7,
            'email' => 'rihanna@gmail.com',
            'phone_number' => '081234567899',
            'photo' => asset('images/doctors/female-doctor7.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Olivia Rodrigo, Sp.THT',
            'gender' => 'Female',
            'speciality_id' => 8,
            'email' => 'olivia@gmail.com',
            'phone_number' => '081234567899',
            'photo' => asset('images/doctors/female-doctor8.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Katy Perry, Sp.M',
            'gender' => 'Female',
            'speciality_id' => 9,
            'email' => 'katy@gmail.com',
            'phone_number' => '081234567899',
            'photo' => asset('images/doctors/female-doctor9.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        // Male Doctors
        Doctor::create([
            'name' => 'dr. David Beckham',
            'gender' => 'Male',
            'speciality_id' => 1,
            'email' => 'beckham@gmail.com',
            'phone_number' => '081234567895',
            'photo' => asset('images/doctors/male-doctor1.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Lionel Messi, Sp.PD',
            'gender' => 'Male',
            'speciality_id' => 2,
            'email' => 'messi@gmail.com',
            'phone_number' => '081234567893',
            'photo' => asset('images/doctors/male-doctor2.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Cristiano Ronaldo, Sp.A',
            'gender' => 'Male',
            'speciality_id' => 3,
            'email' => 'ronaldo@gmail.com',
            'phone_number' => '081234567894',
            'photo' => asset('images/doctors/male-doctor3.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Leonardo DiCaprio, Sp.N',
            'gender' => 'Male',
            'speciality_id' => 4,
            'email' => 'dicaprio@gmail.com',
            'phone_number' => '081234567810',
            'photo' => asset('images/doctors/male-doctor4.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Will Smith, Sp.OG',
            'gender' => 'Male',
            'speciality_id' => 5,
            'email' => 'smith@gmail.com',
            'phone_number' => '081234567811',
            'photo' => asset('images/doctors/male-doctor5.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Tom Cruise, Sp.B',
            'gender' => 'Male',
            'speciality_id' => 6,
            'email' => 'cruise@gmail.com',
            'phone_number' => '081234567812',
            'photo' => asset('images/doctors/male-doctor6.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);

        Doctor::create([
            'name' => 'dr. Brad Pitt, Sp.KK',
            'gender' => 'Male',
            'speciality_id' => 7,
            'email' => 'brad.pitt@gmail.com',
            'phone_number' => '081234567813',
            'photo' => asset('images/doctors/male-doctor7.jpg'),
            'join_date' => $faker->dateTimeBetween('-9 years', 'now')->format('Y-m-d')
        ]);
    }
}
