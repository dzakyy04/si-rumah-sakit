<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $totalPatients = Patient::count();
        $patients = Patient::orderBy('id', 'desc')->take(5)->get();
        $doctors = Doctor::count();
        $medicines = Medicine::count();
        return view('dashboard.index', compact('title', 'patients', 'totalPatients', 'doctors', 'medicines'));
    }
}
