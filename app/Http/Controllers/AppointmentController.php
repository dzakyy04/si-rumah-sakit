<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $title = 'Data Janji Temu';
        $appointments = Appointment::get();
        foreach ($appointments as $appointment) {
            $appointment->polyclinic = $this->mapPolyclinic($appointment->polyclinic);
            $appointment->doctor_photo = Doctor::where('name', $appointment->doctor)->first()->photo; 
        }
        return view('appointment.index', compact('title', 'appointments'));
    }

    private function mapPolyclinic($id)
    {
        $map = [
            1 => 'Umum',
            2 => 'Penyakit Dalam',
            3 => 'Anak',
            4 => 'Saraf',
            5 => 'Kandungan dan Ginekologi',
            6 => 'Bedah',
            7 => 'Kulit dan Kelamin',
            8 => 'THT',
            9 => 'Mata'
        ];

        return $map[$id] ?? $id;
    }
}
