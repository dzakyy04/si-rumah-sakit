<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $title = 'Patients Data';
        return view('patient.index', compact('title'));
    }
    public function show()
    {
        $title = 'Patient Information';
        return view('patient.show', compact('title'));
    }

    public function create()
    {
        $title = 'Add patient';
        return view('patient.create', compact('title'));
    }
}
