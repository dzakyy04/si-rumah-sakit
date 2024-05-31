@extends('layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Patient/ <strong
                                    class="text-primary small">{{ $patient->name }}</strong></h3>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><em
                                                    class="icon ni ni-user-circle-fill"></em><span>Informasi pribadi</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><em
                                                    class="icon ni ni-property"></em><span>Diagnosis</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"><em
                                                    class="icon ni ni-capsule-fill"></em><span>Tekanan darah</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem4"><em
                                                    class="icon ni ni-money"></em><span>Jantung</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem5"><em
                                                    class="icon ni ni-wallet-in"></em><span>Terapi</span> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem6"><em
                                                    class="icon ni ni-wallet-in"></em><span>Infarksi</span> </a>
                                        </li>
                                    </ul>
                                    <div class="card-inner">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabItem1">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Informasi Personal</h6>
                                                        <p>Informasi personal pasien.</p>
                                                    </div><!-- .nk-block-head -->
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Nama</span>
                                                                <span class="profile-ud-value">{{ $patient->name }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Usia</span>
                                                                <span class="profile-ud-value">{{ $patient->age }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Jenis Kelamin</span>
                                                                <span class="profile-ud-value">{{ $patient->sex }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Perokok</span>
                                                                <span class="profile-ud-value">
                                                                    {{ $patient->smoker == 1 ? 'Ya' : 'Tidak' }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Informasi Medis Umum</h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Diagnosis</span>
                                                                <span class="profile-ud-value">{{ $patient->diagnose ? $patient->diagnose : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Alasan Masuk</span>
                                                                <span class="profile-ud-value">{{ $patient->reason_for_admission ? $patient->reason_for_admission : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Diagnosis Tambahan</span>
                                                                <span class="profile-ud-value">{{ $patient->additional_diagnoses ? $patient->additional_diagnoses : '-' }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                            </div><!-- tab pane -->
                                            <div class="tab-pane" id="tabItem2">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Informasi Diagnosis</h6>
                                                        <p>Informasi Pemeriksaan Medis</p>
                                                    </div><!-- .nk-block-head -->
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="card">
                                                        <div class="nk-tb-list nk-tb-ulist is-compact">
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span>Tanggal EKG</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>{{ $patient->ecg_date ? \Carbon\Carbon::parse($patient->ecg_date)->format('d M Y') : '-' }}</span>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span>Tanggal Kateterisasi</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>{{ $patient->catheterization_date ? \Carbon\Carbon::parse($patient->catheterization_date)->format('d M Y') : '-' }}</span>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span>Ventrikulografi</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>{{ $patient->ventriculography ? $patient->ventriculography : '-' }}</span>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col">
                                                                    <span>Rontgen Dada</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>{{ $patient->chest_x_ray ? $patient->chest_x_ray : '-' }}</span>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                        </div><!-- .nk-tb-list -->
                                                    </div><!-- .card -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                            <!--tab pane-->
                                            <div class="tab-pane" id="tabItem3">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Informasi Resep</h6>
                                                        <p>Informasi Tekanan Darah dan Arteri Pulmonal.</p>
                                                    </div><!-- .nk-block-head -->
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Darah Perifer (sist/diast)</span>
                                                                <span class="profile-ud-value">{{ $patient->peripheral_blood_pressure_syst_diast ? $patient->peripheral_blood_pressure_syst_diast : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Arteri Pulmonal (saat istirahat) (sist/diast)</span>
                                                                <span class="profile-ud-value">{{ $patient->pulmonary_artery_pressure_at_rest_syst_diast ? $patient->pulmonary_artery_pressure_at_rest_syst_diast : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Arteri Pulmonal (saat istirahat) (rata-rata)</span>
                                                                <span class="profile-ud-value">{{ $patient->pulmonary_artery_pressure_at_rest_mean ? $patient->pulmonary_artery_pressure_at_rest_mean : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Gumpalan Kapiler Pulmonal (saat istirahat)</span>
                                                                <span class="profile-ud-value">{{ $patient->pulmonary_capillary_wedge_pressure_at_rest ? $patient->pulmonary_capillary_wedge_pressure_at_rest : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Produksi Jantung (saat istirahat)</span>
                                                                <span class="profile-ud-value">{{ $patient->cardiac_output_at_rest ? $patient->cardiac_output_at_rest : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Indeks Jantung (saat istirahat)</span>
                                                                <span class="profile-ud-value">{{ $patient->cardiac_index_at_rest ? $patient->cardiac_index_at_rest : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Indeks Volume Stroke (saat istirahat)</span>
                                                                <span class="profile-ud-value">{{ $patient->stroke_volume_index_at_rest ? $patient->stroke_volume_index_at_rest : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Arteri Pulmonal (beban) (sist/diast)</span>
                                                                <span class="profile-ud-value">{{ $patient->pulmonary_artery_pressure_load_syst_diast ? $patient->pulmonary_artery_pressure_load_syst_diast : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Arteri Pulmonal (beban) (rata-rata)</span>
                                                                <span class="profile-ud-value">{{ $patient->pulmonary_artery_pressure_load_mean ? $patient->pulmonary_artery_pressure_load_mean : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Gumpalan Kapiler Pulmonal (beban)</span>
                                                                <span class="profile-ud-value">{{ $patient->pulmonary_capillary_wedge_pressure_load ? $patient->pulmonary_capillary_wedge_pressure_load : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Produksi Jantung (beban)</span>
                                                                <span class="profile-ud-value">{{ $patient->cardiac_output_load ? $patient->cardiac_output_load : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Indeks Jantung (beban)</span>
                                                                <span class="profile-ud-value">{{ $patient->cardiac_index_load ? $patient->cardiac_index_load : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Indeks Volume Stroke (beban)</span>
                                                                <span class="profile-ud-value">{{ $patient->stroke_volume_index_load ? $patient->stroke_volume_index_load : '-' }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                            <!--tab pane-->
                                            <div class="tab-pane" id="tabItem4">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Informasi Jantung</h6>
                                                        <p>Informasi Jantung</p>
                                                    </div><!-- .nk-block-head -->
                                                </div><!-- .nk-block-between  -->
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Aorta (saat istirahat) (sist/diast)</span>
                                                                <span class="profile-ud-value">{{ $patient->aorta_at_rest_syst_diast ? $patient->aorta_at_rest_syst_diast : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Aorta (saat istirahat) rata-rata</span>
                                                                <span class="profile-ud-value">{{ $patient->aorta_at_rest_mean ? $patient->aorta_at_rest_mean : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tekanan Akhir Ventrikel Kiri</span>
                                                                <span class="profile-ud-value">{{ $patient->left_ventricular_enddiastolic_pressure ? $patient->left_ventricular_enddiastolic_pressure : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Stenosis Arteri Koroner Kiri (RIVA)</span>
                                                                <span class="profile-ud-value">{{ $patient->left_coronary_artery_stenoses_riva ? $patient->left_coronary_artery_stenoses_riva : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Stenosis Arteri Koroner Kiri (RCX)</span>
                                                                <span class="profile-ud-value">{{ $patient->left_coronary_artery_stenoses_rcx ? $patient->left_coronary_artery_stenoses_rcx : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Stenosis Arteri Koroner Kanan (RCA)</span>
                                                                <span class="profile-ud-value">{{ $patient->right_coronary_artery_stenoses_rca ? $patient->right_coronary_artery_stenoses_rca : '-' }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                            <!--tab pane-->
                                            <div class="tab-pane" id="tabItem5">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Informasi Terapi</h6>
                                                        <p>Informasi Terapi Pasien.</p>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="nk-block">
                                                        <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPayment">
                                                            <em class="icon ni ni-plus"></em>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Echokardiografi</span>
                                                                <span class="profile-ud-value">{{ $patient->echocardiography ? $patient->echocardiography : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Terapi</span>
                                                                <span class="profile-ud-value">{{ $patient->therapy ? $patient->therapy : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tanggal Infarksi</span>
                                                                <span class="profile-ud-value">{{ $patient->infarction_date ? \Carbon\Carbon::parse($patient->infarction_date)->format('d M Y') : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tanggal Kateterisasi Terapi</span>
                                                                <span class="profile-ud-value">{{ $patient->catheterization_date_therapy ? \Carbon\Carbon::parse($patient->catheterization_date_therapy)->format('d M Y') : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tanggal Masuk Rumah Sakit</span>
                                                                <span class="profile-ud-value">{{ $patient->admission_date ? \Carbon\Carbon::parse($patient->admission_date)->format('d M Y') : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Obat Pra Penerimaan</span>
                                                                <span class="profile-ud-value">{{ $patient->medication_pre_admission ? $patient->medication_pre_admission : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Mulai Terapi Lisis (hh.mm)</span>
                                                                <span class="profile-ud-value">{{ $patient->start_lysis_therapy_hh_mm ? $patient->start_lysis_therapy_hh_mm : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Agen Lisis</span>
                                                                <span class="profile-ud-value">{{ $patient->lytic_agent ? $patient->lytic_agent : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Dosis (Agen Lisis)</span>
                                                                <span class="profile-ud-value">{{ $patient->dosage_lytic_agent ? $patient->dosage_lytic_agent : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Obat Tambahan</span>
                                                                <span class="profile-ud-value">{{ $patient->additional_medication ? $patient->additional_medication : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Obat di Rumah Sakit</span>
                                                                <span class="profile-ud-value">{{ $patient->in_hospital_medication ? $patient->in_hospital_medication : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Obat Setelah Pulang</span>
                                                                <span class="profile-ud-value">{{ $patient->medication_after_discharge ? $patient->medication_after_discharge : '-' }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                            <!--tab pane-->

                                            <!--tab pane-->
                                            <div class="tab-pane" id="tabItem6">
                                                <div class="nk-block nk-block-between">
                                                    <div class="nk-block-head">
                                                        <h6 class="title">Informasi Infarksi</h6>
                                                        <p>Informasi infarksi pasien.</p>
                                                    </div><!-- .nk-block-head -->
                                                </div>
                                                <div class="nk-block">
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Lokalisasi Infarksi Akut</span>
                                                                <span class="profile-ud-value">{{ $patient->acute_infarction_localization ? $patient->acute_infarction_localization : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Lokalisasi Infarksi Sebelumnya</span>
                                                                <span class="profile-ud-value">{{ $patient->former_infarction_localization ? $patient->former_infarction_localization : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Jumlah pembuluh koroner terlibat</span>
                                                                <span class="profile-ud-value">{{ $patient->number_of_coronary_vessels_involved ? $patient->number_of_coronary_vessels_involved : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tanggal Infarksi Akut</span>
                                                                <span class="profile-ud-value">{{ $patient->infarction_date_acute ? \Carbon\Carbon::parse($patient->infarction_date_acute)->format('d M Y') : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tanggal Infarksi Sebelumnya (1)</span>
                                                                <span class="profile-ud-value">{{ $patient->previous_infarction_1_date ? \Carbon\Carbon::parse($patient->previous_infarction_1_date)->format('d M Y') : '-' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tanggal Infarksi Sebelumnya (2)</span>
                                                                <span class="profile-ud-value">{{ $patient->previous_infarction_2_date ? \Carbon\Carbon::parse($patient->previous_infarction_2_date)->format('d M Y') : '-' }}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                        </div>
                                        <!--tab content-->
                                    </div>
                                    <!--card inner-->
                                </div><!-- .card-content -->
                            </div><!-- .card-aside-wrap -->
                        </div>
                        <!--card-->
                    </div>
                    <!--nk block lg-->
                </div>
            </div>
        </div>
    </div>
@endsection
