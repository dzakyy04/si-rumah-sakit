<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('speciality')->get();
        $specialities = Speciality::with('doctors')->orderBy('name')->get();
        return view('frontend.index', compact('doctors', 'specialities'));
    }
}
