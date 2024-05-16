<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $title = 'Medicines Data';
        $medicines = Medicine::all();
        $totalMedicines = Medicine::count();
        return view('medicine.index', compact('title', 'medicines', 'totalMedicines'));
    }
    public function show($id)
    {
        $title = 'Medicine Information';
        $medicine = Medicine::find($id);
        return view('medicine.show', compact('title', 'medicine'));
    }

    public function create()
    {
        $title = 'Add medicine';
        return view('medicine.create', compact('title'));
    }

public function store(Request $request)
{
    // Validasi data yang masuk
    $validatedData = $request->validate([
        'medicine_name' => 'required|string|max:255',
        'category_name' => 'required|string|max:255',
        'generic_name' => 'nullable|string|max:255',
        'strength' => 'nullable|string|max:255',
        'manufacturer_name' => 'nullable|string|max:255',
        'unit' => 'nullable|string|max:255',
        'stock' => 'nullable|max:255',
    ]);

    // Menyimpan data ke database menggunakan ORM
    Medicine::create($validatedData);

    // Mengembalikan respon sukses
    return back()->with('success', 'Obat berhasil ditambahkan');
}

public function update(Request $request, $id)
{
    // Validasi data yang masuk
    $validatedData = $request->validate([
        'medicine_name' => 'required|string|max:255',
        'category_name' => 'required|string|max:255',
        'generic_name' => 'nullable|string|max:255',
        'strength' => 'nullable|string|max:255',
        'manufacturer_name' => 'nullable|string|max:255',
        'unit' => 'nullable|string|max:255',
        'stock' => 'nullable|string|max:255',
    ]);

    // Mencari medicine berdasarkan ID
    $medicine = Medicine::findOrFail($id);

    // Memperbarui data medicine
    $medicine->update($validatedData);

    // Mengembalikan respon sukses
    return back()->with('success', 'Obat berhasil diperbarui');
}
public function destroy($id)
{
    // Mencari medicine berdasarkan ID
    $medicine = Medicine::findOrFail($id);

    // Menghapus medicine
    $medicine->delete();

    // Mengembalikan respon sukses
    return back()->with('success', 'Obat berhasil dihapus');
}

public function getMedicine($id)
{
    $medicine = Medicine::find($id);
    return response()->json($medicine);
}

public function edit($id)
{
    $title = 'Edit medicine';
    $medicine = Medicine::find($id);
    return view('medicine.edit', compact('title', 'medicine'));
}

}
