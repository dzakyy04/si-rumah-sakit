<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Data Dokter';

        // Mengambil nilai query dari URL
        $filters = $request->only(['nama', 'jenis_kelamin', 'spesialis']);

        // Pemetaan nilai jenis kelamin
        if (isset($filters['jenis_kelamin'])) {
            $filters['jenis_kelamin'] = $this->mapGender($filters['jenis_kelamin']);
        }

        // Membuat query builder untuk tabel dokter
        $query = Doctor::with('speciality');

        // Menerapkan filter
        $this->applyFilters($query, $filters);

        // Mengambil hasil dari query
        $doctors = $query->get();
        $totalDoctors = $query->count();

        return view('doctor.index', compact('title', 'doctors', 'totalDoctors'));
    }

    private function applyFilters($query, $filters)
    {
        foreach ($filters as $filterName => $filterValue) {
            if ($filterValue) {
                switch ($filterName) {
                    case 'nama':
                        $query->where('name', 'like', '%' . $filterValue . '%');
                        break;
                    case 'jenis_kelamin':
                        $query->where('gender', $filterValue);
                        break;
                    case 'spesialis':
                        $query->whereHas('speciality', function ($q) use ($filterValue) {
                            $q->where('name', $filterValue);
                        });
                        break;
                }
            }
        }
    }

    private function mapGender($gender)
    {
        $map = [
            'laki-laki' => 'male',
            'perempuan' => 'female'
        ];

        return $map[$gender] ?? $gender;
    }

    public function getDoctorsBySpeciality(Request $request)
    {
        $doctors = Doctor::where('speciality_id', $request->speciality_id)->get();
        return response()->json(['doctors' => $doctors]);
    }
}
