@extends('layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Edit Pasien</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Masukkan informasi baru pasien dengan hati-hati.</p>
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
                                                <h5 class="title nk-block-title">Informasi Pribadi</h5>
                                                <p>Memberikan detail dasar seperti Nama, Usia, Jenis Kelamin, dll.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Nama</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="{{ $patient->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="age">Usia</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" placeholder="Usia" name="age" id="age" value="{{ $patient->age }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="form-group col-xxl-3 col-md-6">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio1" name="sex" value="male" autocomplete="off" required class="custom-control-input" {{ $patient->sex == 'male' ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio2" name="sex" value="female" autocomplete="off" required class="custom-control-input" {{ $patient->sex == 'female' ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group col-xxl-3 col-md-6">
                                                    <label class="form-label">Perokok</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio3" name="smoker" value="1" autocomplete="off" required class="custom-control-input" {{ $patient->smoker == 1 ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio3">Ya</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="preview-block">
                                                                <div class="custom-control custom-control-sm custom-radio">
                                                                    <input type="radio" id="customRadio4" name="smoker" value="0" autocomplete="off" required class="custom-control-input" {{ $patient->smoker == 0 ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadio4">Tidak</label>
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
                                                <p>Mengumpulkan data pasien penting dengan cepat dengan formulir medis ini, termasuk diagnosis utama, alasan masuk, dan diagnosis tambahan, untuk pencatatan yang akurat.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="diagnose">Diagnosis</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="diagnose" placeholder="Diagnosis" name="diagnose" value="{{ $patient->diagnose }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="reason_for_admission">Alasan Masuk</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="reason_for_admission" placeholder="Myokardial" name="reason_for_admission" value="{{ $patient->reason_for_admission }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="additional_diagnose">Diagnosis Tambahan</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" placeholder="Diagnosis Tambahan" name="additional_diagnose" id="additional_diagnose" value="{{ $patient->additional_diagnose }}">
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
                                                <h5 class="title nk-block-title">Informasi Infarksi Jantung</h5>
                                                <p>Merekam dengan efisien detail infarksi jantung seperti lokalitas, pembuluh yang terlibat, tanggal, dan obat pasca-pulang.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="acute_infarction_localization">Lokalisasi Infarksi Akut</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="acute_infarction_localization" name="acute_infarction_localization" placeholder="Lokalisasi Infarksi Akut" value="{{ $patient->acute_infarction_localization }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="former_infarction_localization">Lokalisasi Infarksi Sebelumnya</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="former_infarction_localization" name="former_infarction_localization" placeholder="Lokalisasi Infarksi Sebelumnya" value="{{ $patient->former_infarction_localization }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="number_of_coronary_vessels">Jumlah pembuluh koroner yang terlibat</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="number_of_coronary_vessels" name="number_of_coronary_vessels" placeholder="Jumlah pembuluh koroner yang terlibat" value="{{ $patient->number_of_coronary_vessels }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="infarction_date_acute">Tanggal Infarksi Akut</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="infarction_date_acute" name="infarction_date_acute" value="{{ $patient->infarction_date_acute }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="previous_infarction_date_1">Tanggal Infarksi Sebelumnya (1)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="previous_infarction_date_1" name="previous_infarction_date_1" value="{{ $patient->previous_infarction_date_1 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="previous_infarction_date_2">Tanggal Infarksi Sebelumnya (2)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="previous_infarction_date_2" name="previous_infarction_date_2" value="{{ $patient->previous_infarction_date_2 }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="medication_after_discharge">Obat Setelah Pulang</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="medication_after_discharge" name="medication_after_discharge" placeholder="Obat Setelah Pulang" value="{{ $patient->medication_after_discharge }}">
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
                                                <p>Beberapa informasi medis umum tentang pasien.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="ecg_date">Tanggal EKG</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="ecg_date" name="ecg_date" value="{{ $patient->ecg_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="catheterization_date">Tanggal Kateterisasi</label>
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
                                                        <label class="form-label" for="chest_x_ray">X-ray Dada</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="chest_x_ray" name="chest_x_ray" placeholder="X-ray Dada" value="{{ $patient->chest_x_ray }}">
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
                                                <h5 class="title nk-block-title">Kondisi Medis</h5>
                                                <p>Detail informasi tentang kondisi medis saat ini pasien.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="peripheral_blood_pressure_syst_diast">Tekanan Darah Perifer (sistolik/diastolik)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="peripheral_blood_pressure_syst_diast" name="peripheral_blood_pressure_syst_diast" placeholder="Tekanan Darah Perifer (sistolik/diastolik)" value="{{ $patient->peripheral_blood_pressure_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_at_rest_syst_diast">Tekanan Arteri Pulmonalis (istirahat) (sistolik/diastolik)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_at_rest_syst_diast" name="pulmonary_artery_pressure_at_rest_syst_diast" placeholder="Tekanan Arteri Pulmonalis (istirahat) (sistolik/diastolik)" value="{{ $patient->pulmonary_artery_pressure_at_rest_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_at_rest_mean">Tekanan Arteri Pulmonalis (istirahat) (rata-rata)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_at_rest_mean" name="pulmonary_artery_pressure_at_rest_mean" placeholder="Tekanan Arteri Pulmonalis (istirahat) (rata-rata)" value="{{ $patient->pulmonary_artery_pressure_at_rest_mean }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_capillary_wedge_pressure_at_rest">Tekanan Penggalengan Kapiler Pulmonal (istirahat)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_capillary_wedge_pressure_at_rest" name="pulmonary_capillary_wedge_pressure_at_rest" placeholder="Tekanan Penggalengan Kapiler Pulmonal (istirahat)" value="{{ $patient->pulmonary_capillary_wedge_pressure_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_output_at_rest">Output Jantung (istirahat)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_output_at_rest" name="cardiac_output_at_rest" placeholder="Output Jantung (istirahat)" value="{{ $patient->cardiac_output_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_index_at_rest">Indeks Jantung (istirahat)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_index_at_rest" name="cardiac_index_at_rest" placeholder="Indeks Jantung (istirahat)" value="{{ $patient->cardiac_index_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="stroke_volume_index_at_rest">Indeks Volume Darah (istirahat)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="stroke_volume_index_at_rest" name="stroke_volume_index_at_rest" placeholder="Indeks Volume Darah (istirahat)" value="{{ $patient->stroke_volume_index_at_rest }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_load_syst_diast">Tekanan Arteri Pulmonalis (beban) (sistolik/diastolik)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_load_syst_diast" name="pulmonary_artery_pressure_load_syst_diast" placeholder="Tekanan Arteri Pulmonalis (beban) (sistolik/diastolik)" value="{{ $patient->pulmonary_artery_pressure_load_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_artery_pressure_load_mean">Tekanan Arteri Pulmonalis (beban) (rata-rata)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_artery_pressure_load_mean" name="pulmonary_artery_pressure_load_mean" placeholder="Tekanan Arteri Pulmonalis (beban) (rata-rata)" value="{{ $patient->pulmonary_artery_pressure_load_mean }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pulmonary_capillary_wedge_pressure_load">Tekanan Penggalengan Kapiler Pulmonal (beban)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="pulmonary_capillary_wedge_pressure_load" name="pulmonary_capillary_wedge_pressure_load" placeholder="Tekanan Penggalengan Kapiler Pulmonal (beban)" value="{{ $patient->pulmonary_capillary_wedge_pressure_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_output_load">Output Jantung (beban)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_output_load" name="cardiac_output_load" placeholder="Output Jantung (beban)" value="{{ $patient->cardiac_output_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cardiac_index_load">Indeks Jantung (beban)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="cardiac_index_load" name="cardiac_index_load" placeholder="Indeks Jantung (beban)" value="{{ $patient->cardiac_index_load }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="stroke_volume_index_load">Indeks Volume Darah (beban)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="stroke_volume_index_load" name="stroke_volume_index_load" placeholder="Indeks Volume Darah (beban)" value="{{ $patient->stroke_volume_index_load }}">
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
                                                <h5 class="title nk-block-title">Informasi Jantung</h5>
                                                <p>Detail informasi tentang kondisi jantung pasien saat ini.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="aorta_at_rest_syst_diast">Aorta (saat istirahat) (sistol/diastol)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="aorta_at_rest_syst_diast" name="aorta_at_rest_syst_diast" placeholder="Aorta (saat istirahat) (sistol/diastol)" value="{{ $patient->aorta_at_rest_syst_diast }}">
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="aorta_at_rest_mean">Aorta (saat istirahat) rata-rata</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="aorta_at_rest_mean" name="aorta_at_rest_mean" placeholder="Aorta (saat istirahat) rata-rata" value="{{ $patient->aorta_at_rest_mean }}">
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="left_ventricular_enddiastolic_pressure">Tekanan Diastolik Enddiastolik Ventrikel Kiri</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="left_ventricular_enddiastolic_pressure" name="left_ventricular_enddiastolic_pressure" placeholder="Tekanan Diastolik Enddiastolik Ventrikel Kiri" value="{{ $patient->left_ventricular_enddiastolic_pressure }}">
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="left_coronary_artery_stenoses_riva">Stenosis Arteri Koroner Kiri (RIVA)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="left_coronary_artery_stenoses_riva" name="left_coronary_artery_stenoses_riva" placeholder="Stenosis Arteri Koroner Kiri (RIVA)" value="{{ $patient->left_coronary_artery_stenoses_riva }}">
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="left_coronary_artery_stenoses_rcx">Stenosis Arteri Koroner Kiri (RCX)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="left_coronary_artery_stenoses_rcx" name="left_coronary_artery_stenoses_rcx" placeholder="Stenosis Arteri Koroner Kiri (RCX)" value="{{ $patient->left_coronary_artery_stenoses_rcx }}">
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="right_coronary_artery_stenoses_rca">Stenosis Arteri Koroner Kanan (RCA)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="right_coronary_artery_stenoses_rca" name="right_coronary_artery_stenoses_rca" placeholder="Stenosis Arteri Koroner Kanan (RCA)" value="{{ $patient->right_coronary_artery_stenoses_rca }}">
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
                                                <h5 class="title nk-block-title">Informasi Terapi</h5>
                                                <p>Detail informasi tentang kondisi terapi pasien.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="echocardiography">Echokardiografi</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="echocardiography" name="echocardiography" placeholder="Echokardiografi" value="{{ $patient->echocardiography }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="therapy">Terapi</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="therapy" name="therapy" placeholder="Terapi" value="{{ $patient->therapy }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="infarction_date">Tanggal Infarksi</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="infarction_date" name="infarction_date" placeholder="Tanggal Infarksi" value="{{ $patient->infarction_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="catheterization_date_therapy">Tanggal Kateterisasi Terapi</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="catheterization_date_therapy" name="catheterization_date_therapy" placeholder="Tanggal Kateterisasi Terapi" value="{{ $patient->catheterization_date_therapy }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="admission_date">Tanggal Penerimaan</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="admission_date" name="admission_date" placeholder="Tanggal Penerimaan" value="{{ $patient->admission_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="medication_pre_admission">Obat Sebelum Penerimaan</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="medication_pre_admission" name="medication_pre_admission" placeholder="Obat Sebelum Penerimaan" value="{{ $patient->medication_pre_admission }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="start_lysis_therapy_hh_mm">Mulai Terapi Lisis (jam.menit)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="start_lysis_therapy_hh_mm" name="start_lysis_therapy_hh_mm" placeholder="Mulai Terapi Lisis (jam.menit)" value="{{ $patient->start_lysis_therapy_hh_mm }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lytic_agent">Agen Lisis</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="lytic_agent" name="lytic_agent" placeholder="Agen Lisis" value="{{ $patient->lytic_agent }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="dosage_lytic_agent">Dosis (Agen Lisis)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="dosage_lytic_agent" name="dosage_lytic_agent" placeholder="Dosis (Agen Lisis)" value="{{ $patient->dosage_lytic_agent }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="additional_medication">Obat Tambahan</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="additional_medication" name="additional_medication" placeholder="Obat Tambahan" value="{{ $patient->additional_medication }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="in_hospital_medication">Obat di Rumah Sakit</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="in_hospital_medication" name="in_hospital_medication" placeholder="Obat di Rumah Sakit" value="{{ $patient->in_hospital_medication }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="medication_after_discharge">Obat Setelah Pulang</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="medication_after_discharge" name="medication_after_discharge" placeholder="Obat Setelah Pulang" value="{{ $patient->medication_after_discharge }}">
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
