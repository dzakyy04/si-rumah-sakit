@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dokter</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <a href="html/hospital/doctor-nurse-add.html"
                                        class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                    <a href="html/hospital/doctor-nurse-add.html"
                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Tambah Dokter</span></a>
                                </li>
                            </ul>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="row g-gs">
                    @foreach ($doctors as $doctor)
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="team">
                                        <div class="team-options">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#">
                                                                <em class="icon ni ni-pen"></em>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em class="icon ni ni-trash"></em>
                                                                <span>Hapus</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <img src="{{ $doctor->photo }}" alt="">
                                            </div>
                                            <div class="user-info">
                                                <h6>{{ $doctor->name }}</h6>
                                                <span class="sub-text">Dokter
                                                    {{ $doctor->speciality->name == 'Umum' ? '' : 'Spesialis ' }}
                                                    {{ $doctor->speciality->name }}</span>
                                            </div>
                                        </div>
                                        <ul class="team-info">
                                            <li><span>Poliklinik</span><span>{{ $doctor->speciality->name }}</span></li>
                                            <li><span>Jenis Kelamin</span><span>{{ $doctor->gender == 'Male' ? 'Laki-Laki' : 'Perempuan' }}</span></li>
                                            <li><span>Tanggal
                                                    Bergabung</span><span>{{ \Carbon\Carbon::parse($doctor->join_date)->format('d M Y') }}</span>
                                            </li>
                                            <li><span>No. Telepon</span><span>{{ $doctor->phone_number }}</span></li>
                                            <li><span>Email</span><span>{{ $doctor->email }}</span></li>
                                        </ul>
                                    </div><!-- .team -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
