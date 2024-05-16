<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Data Dokter';
        $specialities = Speciality::orderBy('name')->get();

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

        return view('doctor.index', compact('title', 'doctors', 'totalDoctors', 'specialities', 'filters'));
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


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'speciality_id' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|',
            'join_date' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo->storeAs('public/doctors', $photo->hashName());
            $data['photo'] = env('APP_URL') . '/storage/doctors/' . $photo->hashName();
        }

        Doctor::create($data);

        return back()->with('success', 'Dokter berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'speciality_id' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'join_date' => 'required',
        ]);

        $doctor = Doctor::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($doctor->photo) {
                $oldPhotoPath = str_replace(env('APP_URL') . '/storage', 'public', $doctor->photo);
                Storage::delete($oldPhotoPath);
            }

            $photo = $request->file('photo');
            $photo->storeAs('public/doctors', $photo->hashName());
            $data['photo'] = env('APP_URL') . '/storage/doctors/' . $photo->hashName();
        }

        $doctor->update($data);

        return back()->with('success', 'Dokter berhasil diperbarui');
    }


    public function getDoctor($id)
    {
        $dokter = Doctor::find($id);
        return response()->json($dokter);
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);

        if ($doctor->photo) {
            $photoPath = str_replace(env('APP_URL') . '/storage', 'public', $doctor->photo);
            Storage::delete($photoPath);
        }

        $doctor->delete();

        return back()->with('success', 'Dokter berhasil dihapus');
    }



}
