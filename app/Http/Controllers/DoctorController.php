<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $title = 'Data Dokter';
        $doctors = Doctor::with('speciality')->get();
        $totalDoctors = Doctor::count();
        return view('doctor.index', compact('title', 'doctors', 'totalDoctors'));
    }
}
