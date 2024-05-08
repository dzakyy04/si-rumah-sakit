<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('diagnose')->nullable();
            $table->string('reason_for_admission')->nullable();
            $table->string('acute_infarction_localization')->nullable();
            $table->string('former_infarction_localization')->nullable();
            $table->string('additional_diagnoses')->nullable();
            $table->tinyInteger('smoker')->nullable();
            $table->integer('number_of_coronary_vessels_involved')->nullable();
            $table->date('infarction_date_acute')->nullable();
            $table->date('previous_infarction_1_date')->nullable();
            $table->date('previous_infarction_2_date')->nullable();
            $table->date('catheterization_date')->nullable();
            $table->string('ventriculography')->nullable();
            $table->string('chest_x_ray')->nullable();
            $table->string('peripheral_blood_pressure_syst_diast')->nullable();
            $table->string('pulmonary_artery_pressure_at_rest_syst_diast')->nullable();
            $table->string('pulmonary_artery_pressure_at_rest_mean')->nullable();
            $table->string('pulmonary_capillary_wedge_pressure_at_rest')->nullable();
            $table->string('cardiac_output_at_rest')->nullable();
            $table->string('cardiac_index_at_rest')->nullable();
            $table->string('stroke_volume_index_at_rest')->nullable();
            $table->string('pulmonary_artery_pressure_load_syst_diast')->nullable();
            $table->string('pulmonary_artery_pressure_load_mean')->nullable();
            $table->string('pulmonary_capillary_wedge_pressure_load')->nullable();
            $table->string('cardiac_output_load')->nullable();
            $table->string('cardiac_index_load')->nullable();
            $table->string('stroke_volume_index_load')->nullable();
            $table->string('aorta_at_rest_syst_diast')->nullable();
            $table->string('aorta_at_rest_mean')->nullable();
            $table->string('left_ventricular_enddiastolic_pressure')->nullable();
            $table->string('left_coronary_artery_stenoses_riva')->nullable();
            $table->string('left_coronary_artery_stenoses_rcx')->nullable();
            $table->string('right_coronary_artery_stenoses_rca')->nullable();
            $table->string('echocardiography')->nullable();
            $table->string('therapy')->nullable();
            $table->date('infarction_date')->nullable();
            $table->date('catheterization_date_therapy')->nullable();
            $table->date('admission_date')->nullable();
            $table->string('medication_pre_admission')->nullable();
            $table->string('start_lysis_therapy_hh_mm')->nullable();
            $table->string('lytic_agent')->nullable();
            $table->string('dosage_lytic_agent')->nullable();
            $table->string('additional_medication')->nullable();
            $table->string('in_hospital_medication')->nullable();
            $table->string('medication_after_discharge')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
