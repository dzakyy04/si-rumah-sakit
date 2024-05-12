<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $title = 'Patients Data';
        $patients = Patient::all();
        $totalPatients = Patient::count();
        return view('patient.index', compact('title', 'patients', 'totalPatients'));
    }
    public function show($id)
    {
        $title = 'Patient Information';
        $patient = Patient::find($id);
        return view('patient.show', compact('title', 'patient'));
    }

    public function create()
    {
        $title = 'Add patient';
        return view('patient.create', compact('title'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string',
            'age' => 'nullable|integer',
            'sex' => 'nullable|string',
            'ecg_date' => 'nullable|date',
            'diagnose' => 'nullable|string',
            'reason_for_admission' => 'nullable|string',
            'acute_infarction_localization' => 'nullable|string',
            'former_infarction_localization' => 'nullable|string',
            'additional_diagnoses' => 'nullable|string',
            'smoker' => 'nullable|boolean',
            'number_of_coronary_vessels_involved' => 'nullable|integer',
            'infarction_date_acute' => 'nullable|date',
            'previous_infarction_1_date' => 'nullable|date',
            'previous_infarction_2_date' => 'nullable|date',
            'catheterization_date' => 'nullable|date',
            'ventriculography' => 'nullable|string',
            'chest_x_ray' => 'nullable|string',
            'peripheral_blood_pressure_syst_diast' => 'nullable|string',
            'pulmonary_artery_pressure_at_rest_syst_diast' => 'nullable|string',
            'pulmonary_artery_pressure_at_rest_mean' => 'nullable|string',
            'pulmonary_capillary_wedge_pressure_at_rest' => 'nullable|string',
            'cardiac_output_at_rest' => 'nullable|string',
            'cardiac_index_at_rest' => 'nullable|string',
            'stroke_volume_index_at_rest' => 'nullable|string',
            'pulmonary_artery_pressure_load_syst_diast' => 'nullable|string',
            'pulmonary_artery_pressure_load_mean' => 'nullable|string',
            'pulmonary_capillary_wedge_pressure_load' => 'nullable|string',
            'cardiac_output_load' => 'nullable|string',
            'cardiac_index_load' => 'nullable|string',
            'stroke_volume_index_load' => 'nullable|string',
            'aorta_at_rest_syst_diast' => 'nullable|string',
            'aorta_at_rest_mean' => 'nullable|string',
            'left_ventricular_enddiastolic_pressure' => 'nullable|string',
            'left_coronary_artery_stenoses_riva' => 'nullable|string',
            'left_coronary_artery_stenoses_rcx' => 'nullable|string',
            'right_coronary_artery_stenoses_rca' => 'nullable|string',
            'echocardiography' => 'nullable|string',
            'therapy' => 'nullable|string',
            'infarction_date' => 'nullable|date',
            'catheterization_date_therapy' => 'nullable|date',
            'admission_date' => 'nullable|date',
            'medication_pre_admission' => 'nullable|string',
            'start_lysis_therapy_hh_mm' => 'nullable|string',
            'lytic_agent' => 'nullable|string',
            'dosage_lytic_agent' => 'nullable|string',
            'additional_medication' => 'nullable|string',
            'in_hospital_medication' => 'nullable|string',
            'medication_after_discharge' => 'nullable|string',
        ]);

        Patient::create($data);

        return to_route('patient.index')->with('success', "Data pasien berhasil ditambahkan");
    }

    public function edit($id)
    {
        $title = 'Edit patient';
        $patient = Patient::find($id);
        return view('patient.edit', compact('title', 'patient'));
    }

    public function update(Request $request, $id)
{
    // Validasi data yang diterima dari request
    $data = $request->validate([
        'name' => 'nullable|string',
        'age' => 'nullable|integer',
        'sex' => 'nullable|string',
        'ecg_date' => 'nullable|date',
        'diagnose' => 'nullable|string',
        'reason_for_admission' => 'nullable|string',
        'acute_infarction_localization' => 'nullable|string',
        'former_infarction_localization' => 'nullable|string',
        'additional_diagnoses' => 'nullable|string',
        'smoker' => 'nullable|boolean',
        'number_of_coronary_vessels_involved' => 'nullable|integer',
        'infarction_date_acute' => 'nullable|date',
        'previous_infarction_1_date' => 'nullable|date',
        'previous_infarction_2_date' => 'nullable|date',
        'catheterization_date' => 'nullable|date',
        'ventriculography' => 'nullable|string',
        'chest_x_ray' => 'nullable|string',
        'peripheral_blood_pressure_syst_diast' => 'nullable|string',
        'pulmonary_artery_pressure_at_rest_syst_diast' => 'nullable|string',
        'pulmonary_artery_pressure_at_rest_mean' => 'nullable|string',
        'pulmonary_capillary_wedge_pressure_at_rest' => 'nullable|string',
        'cardiac_output_at_rest' => 'nullable|string',
        'cardiac_index_at_rest' => 'nullable|string',
        'stroke_volume_index_at_rest' => 'nullable|string',
        'pulmonary_artery_pressure_load_syst_diast' => 'nullable|string',
        'pulmonary_artery_pressure_load_mean' => 'nullable|string',
        'pulmonary_capillary_wedge_pressure_load' => 'nullable|string',
        'cardiac_output_load' => 'nullable|string',
        'cardiac_index_load' => 'nullable|string',
        'stroke_volume_index_load' => 'nullable|string',
        'aorta_at_rest_syst_diast' => 'nullable|string',
        'aorta_at_rest_mean' => 'nullable|string',
        'left_ventricular_enddiastolic_pressure' => 'nullable|string',
        'left_coronary_artery_stenoses_riva' => 'nullable|string',
        'left_coronary_artery_stenoses_rcx' => 'nullable|string',
        'right_coronary_artery_stenoses_rca' => 'nullable|string',
        'echocardiography' => 'nullable|string',
        'therapy' => 'nullable|string',
        'infarction_date' => 'nullable|date',
        'catheterization_date_therapy' => 'nullable|date',
        'admission_date' => 'nullable|date',
        'medication_pre_admission' => 'nullable|string',
        'start_lysis_therapy_hh_mm' => 'nullable|string',
        'lytic_agent' => 'nullable|string',
        'dosage_lytic_agent' => 'nullable|string',
        'additional_medication' => 'nullable|string',
        'in_hospital_medication' => 'nullable|string',
        'medication_after_discharge' => 'nullable|string',
    ]);

    // Temukan data pasien berdasarkan ID
    $patient = Patient::findOrFail($id);

    // Update data pasien dengan data yang divalidasi
    $patient->update($data);

    // Beri pesan sukses dan kembalikan pengguna ke halaman sebelumnya
    return to_route('patient.index')->with('success', "Data pasien berhasil diperbarui");
}

public function getPatient($id)
{
    $patient = Patient::find($id);
    return response()->json($patient);
}
public function delete($id)
{
    $patient = Patient::find($id);
    $patient->delete();
    return back()->with('success', "Data pasien berhasil dihapus");
}

}
