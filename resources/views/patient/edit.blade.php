@extends('layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Add Patient</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Input new Patient information carefully.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <form action="{{ route('patient.update', $patient->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Personal Info</h5>
                                                <p>Provide basic details such as Name, Age, Gender, etc.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Name" name="name" value="{{ $patient->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="age">Age</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" placeholder="Age" name="age" id="age" value="{{ $patient->age }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="form-group col-xxl-3 col-md-6">
                                                    <label class="form-label">Gender</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio1" name="sex" value="male" autocomplete="off" required class="custom-control-input" {{ $patient->sex == 'male' ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio1">Male</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio2" name="sex" value="female" autocomplete="off" required class="custom-control-input" {{ $patient->sex == 'female' ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio2">Female</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-xxl-3 col-md-6">
                                                    <label class="form-label">Smoker</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio3" name="smoker" value="1" autocomplete="off" required class="custom-control-input" {{ $patient->smoker == 1 ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio3">Yes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio4" name="smoker" value="0" autocomplete="off" required class="custom-control-input" {{ $patient->smoker == 0 ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio4">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row-->
                                        </div>
                                    </div><!-- .card-inner -->

                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Informasi Medis Umum</h5>
                                                <p>Capture essential patient data swiftly with this medical form, including primary diagnosis, reason for admission, and additional diagnoses, for accurate record-keeping.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="diagnose">Diagnose</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="diagnose"
                                                                placeholder="Diagnose" name="diagnose" value="{{ $patient->diagnose }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="reason_for_admission">Reason For
                                                            Admission</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="reason_for_admission"
                                                                placeholder="Myocardial" name="reason_for_admission" value="{{ $patient->reason_for_admission }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="additional_diagnose">Additional Diagnose</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" placeholder="Additional Diagnose" name="additional_diagnose" id="additional_diagnose" value="{{ $patient->additional_diagnose }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div>
                                    </div><!-- .card-inner -->

                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Cardiac Infarction Information</h5>
                                                <p>Efficiently record cardiac infarction details such as localization, vessels involved, dates, and medication post-discharge.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="acute_infarction_localization">Acute Infarction Localization</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="acute_infarction_localization" name="acute_infarction_localization" placeholder="Acute Infarction Localization" value="{{ $patient->acute_infarction_localization }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="former_infarction_localization">Former Infarction Localization</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="former_infarction_localization" name="former_infarction_localization" placeholder="Former Infarction Localization" value="{{ $patient->former_infarction_localization }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="number_of_coronary_vessels">Number of coronary vessels involved</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="number_of_coronary_vessels" name="number_of_coronary_vessels" placeholder="Number of coronary vessels involved" value="{{ $patient->number_of_coronary_vessels }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="infarction_date_acute">Infarction Date Acute</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="infarction_date_acute" name="infarction_date_acute" value="{{ $patient->infarction_date_acute }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="previous_infarction_date_1">Previous Infarction (1) Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="previous_infarction_date_1" name="previous_infarction_date_1" value="{{ $patient->previous_infarction_date_1 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="previous_infarction_date_2">Previous Infarction (2) Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="previous_infarction_date_2" name="previous_infarction_date_2" value="{{ $patient->previous_infarction_date_2 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="medication_after_discharge">Medication After Discharge</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="medication_after_discharge" name="medication_after_discharge" placeholder="Medication After Discharge" value="{{ $patient->medication_after_discharge }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row-->
                                        </div>
                                        
                                        
                                        
                                    </div><!-- .card-inner -->


                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Tanggal Pemeriksaan</h5>
                                                <p>Some common medical information about patient. </p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ecg_date">ECG Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="ecg_date" name="ecg_date" value="{{ $patient->ecg_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="catheterization_date">Catheterization Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="catheterization_date" name="catheterization_date" value="{{ $patient->catheterization_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ventriculography">Ventriculography</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="ventriculography" name="ventriculography" placeholder="Ventriculography" value="{{ $patient->ventriculography }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="chest_x_ray">Chest X-ray</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="chest_x_ray" name="chest_x_ray" placeholder="Chest X-ray" value="{{ $patient->chest_x_ray }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div>
                                        
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Madical Condition</h5>
                                                <p>Details information about patient current medical condition. </p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="peripheral_blood_pressure_syst_diast">Peripheral Blood Pressure (syst/diast)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="peripheral_blood_pressure_syst_diast" name="peripheral_blood_pressure_syst_diast" placeholder="Peripheral Blood Pressure (syst/diast)" value="{{ $patient->peripheral_blood_pressure_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_at_rest_syst_diast">Pulmonary Artery Pressure (at rest) (syst/diast)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_at_rest_syst_diast" name="pulmonary_artery_pressure_at_rest_syst_diast" placeholder="Pulmonary Artery Pressure (at rest) (syst/diast)" value="{{ $patient->pulmonary_artery_pressure_at_rest_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_at_rest_mean">Pulmonary Artery Pressure (at rest) (mean)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_at_rest_mean" name="pulmonary_artery_pressure_at_rest_mean" placeholder="Pulmonary Artery Pressure (at rest) (mean)" value="{{ $patient->pulmonary_artery_pressure_at_rest_mean }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_capillary_wedge_pressure_at_rest">Pulmonary Capillary Wedge Pressure (at rest)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_capillary_wedge_pressure_at_rest" name="pulmonary_capillary_wedge_pressure_at_rest" placeholder="Pulmonary Capillary Wedge Pressure (at rest)" value="{{ $patient->pulmonary_capillary_wedge_pressure_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_output_at_rest">Cardiac Output (at rest)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_output_at_rest" name="cardiac_output_at_rest" placeholder="Cardiac Output (at rest)" value="{{ $patient->cardiac_output_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_index_at_rest">Cardiac Index (at rest)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_index_at_rest" name="cardiac_index_at_rest" placeholder="Cardiac Index (at rest)" value="{{ $patient->cardiac_index_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="stroke_volume_index_at_rest">Stroke Volume Index (at rest)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="stroke_volume_index_at_rest" name="stroke_volume_index_at_rest" placeholder="Stroke Volume Index (at rest)" value="{{ $patient->stroke_volume_index_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_load_syst_diast">Pulmonary Artery Pressure (load) (syst/diast)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_load_syst_diast" name="pulmonary_artery_pressure_load_syst_diast" placeholder="Pulmonary Artery Pressure (load) (syst/diast)" value="{{ $patient->pulmonary_artery_pressure_load_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_load_mean">Pulmonary Artery Pressure (load) (mean)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_load_mean" name="pulmonary_artery_pressure_load_mean" placeholder="Pulmonary Artery Pressure (load) (mean)" value="{{ $patient->pulmonary_artery_pressure_load_mean }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_capillary_wedge_pressure_load">Pulmonary Capillary Wedge Pressure (load)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_capillary_wedge_pressure_load" name="pulmonary_capillary_wedge_pressure_load" placeholder="Pulmonary Capillary Wedge Pressure (load)" value="{{ $patient->pulmonary_capillary_wedge_pressure_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_output_load">Cardiac Output (load)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_output_load" name="cardiac_output_load" placeholder="Cardiac Output (load)" value="{{ $patient->cardiac_output_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_index_load">Cardiac Index (load)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_index_load" name="cardiac_index_load" placeholder="Cardiac Index (load)" value="{{ $patient->cardiac_index_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="stroke_volume_index_load">Stroke Volume Index (load)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="stroke_volume_index_load" name="stroke_volume_index_load" placeholder="Stroke Volume Index (load)" value="{{ $patient->stroke_volume_index_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div>
                                        
                                        
                                    </div><!-- .card-inner -->

                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Heart Information</h5>
                                                <p>Details information about patient current heart condition. </p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="aorta_at_rest_syst_diast">Aorta (at rest) (syst/diast)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="aorta_at_rest_syst_diast" name="aorta_at_rest_syst_diast" placeholder="Aorta (at rest) (syst/diast)" value="{{ $patient->aorta_at_rest_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="aorta_at_rest_mean">Aorta (at rest) mean</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="aorta_at_rest_mean" name="aorta_at_rest_mean" placeholder="Aorta (at rest) mean" value="{{ $patient->aorta_at_rest_mean }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="left_ventricular_enddiastolic_pressure">Left Ventricular Enddiastolic Pressure</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="left_ventricular_enddiastolic_pressure" name="left_ventricular_enddiastolic_pressure" placeholder="Left Ventricular Enddiastolic Pressure" value="{{ $patient->left_ventricular_enddiastolic_pressure }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="left_coronary_artery_stenoses_riva">Left Coronary Artery Stenoses (RIVA)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="left_coronary_artery_stenoses_riva" name="left_coronary_artery_stenoses_riva" placeholder="Left Coronary Artery Stenoses (RIVA)" value="{{ $patient->left_coronary_artery_stenoses_riva }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="left_coronary_artery_stenoses_rcx">Left Coronary Artery Stenoses (RCX)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="left_coronary_artery_stenoses_rcx" name="left_coronary_artery_stenoses_rcx" placeholder="Left Coronary Artery Stenoses (RCX)" value="{{ $patient->left_coronary_artery_stenoses_rcx }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="right_coronary_artery_stenoses_rca">Right Coronary Artery Stenoses (RCA)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="right_coronary_artery_stenoses_rca" name="right_coronary_artery_stenoses_rca" placeholder="Right Coronary Artery Stenoses (RCA)" value="{{ $patient->right_coronary_artery_stenoses_rca }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row-->
                                        </div>
                                        
                                    </div><!-- .card-inner -->

                                    <div class="card-inner">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="title nk-block-title">Therapy Information</h5>
                                                <p>Details information about patient therapy condition. </p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="echocardiography">Echocardiography</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="echocardiography" name="echocardiography" placeholder="Echocardiography" value="{{ $patient->echocardiography }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="therapy">Therapy</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="therapy" name="therapy" placeholder="Therapy" value="{{ $patient->therapy }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="infarction_date">Infarction Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="infarction_date" name="infarction_date" placeholder="Infarction Date" value="{{ $patient->infarction_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="catheterization_date_therapy">Catheterization Date Therapy</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="catheterization_date_therapy" name="catheterization_date_therapy" placeholder="Catheterization Date Therapy" value="{{ $patient->catheterization_date_therapy }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="admission_date">Admission Date</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="admission_date" name="admission_date" placeholder="Admission Date" value="{{ $patient->admission_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="medication_pre_admission">Medication Pre Admission</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="medication_pre_admission" name="medication_pre_admission" placeholder="Medication Pre Admission" value="{{ $patient->medication_pre_admission }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="start_lysis_therapy_hh_mm">Start Lysis Therapy (hh.mm)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="start_lysis_therapy_hh_mm" name="start_lysis_therapy_hh_mm" placeholder="Start Lysis Therapy (hh.mm)" value="{{ $patient->start_lysis_therapy_hh_mm }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lytic_agent">Lytic Agent</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="lytic_agent" name="lytic_agent" placeholder="Lytic Agent" value="{{ $patient->lytic_agent }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="dosage_lytic_agent">Dosage (Lytic Agent)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="dosage_lytic_agent" name="dosage_lytic_agent" placeholder="Dosage (Lytic Agent)" value="{{ $patient->dosage_lytic_agent }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="additional_medication">Additional Medication</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="additional_medication" name="additional_medication" placeholder="Additional Medication" value="{{ $patient->additional_medication }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="in_hospital_medication">In Hospital Medication</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="in_hospital_medication" name="in_hospital_medication" placeholder="In Hospital Medication" value="{{ $patient->in_hospital_medication }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="medication_after_discharge">Medication After Discharge</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="medication_after_discharge" name="medication_after_discharge" placeholder="Medication After Discharge" value="{{ $patient->medication_after_discharge }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row-->
                                        </div>
                                        
                                    </div><!-- .card-inner -->
                                </div>
                            </div><!-- .card -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary mt-2"><em class="ni ni-save me-1"></em>
                                    Simpan</button>
                            </div>
                        </div><!-- .nk-block -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
