@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Daftar Janji Temu</h3>
                            <div class="nk-block-des text-soft d-none d-md-inline-flex">
                                <ul class="breadcrumb breadcrumb-pipe">
                                    <li class="breadcrumb-item active"><a href="#">Today's Total (150)</a></li>
                                    <li class="breadcrumb-item "><a href="#">Visited (47)</a></li>
                                    <li class="breadcrumb-item"><a href="#">Waiting (12)</a></li>
                                    <li class="breadcrumb-item "><a href="#">Canceled (1)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-icon btn-primary d-md-none"><em
                                    class="icon ni ni-plus"></em></a>
                            <a data-bs-toggle="modal" href="#addAppointment"
                                class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add
                                    Appointment</span></a>
                        </div><!-- .nk-block-head-content -->
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-search search-wrap" data-search="search">
                                <div class="card-body">
                                    <div class="search-content">
                                        <a href="#" class="search-back btn btn-icon toggle-search"
                                            data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                        <input type="text" class="form-control border-transparent form-focus-none"
                                            placeholder="Search by patient name or id">
                                        <button class="search-submit btn btn-icon"><em
                                                class="icon ni ni-search"></em></button>
                                    </div>
                                </div>
                            </div><!-- .card-search -->
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span class="sub-text">No</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Pasien</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Poliklinik</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Dokter</span></th>
                                        <th class="nk-tb-col"><span class="sub-text">Tanggal</span>
                                        <th class="nk-tb-col"><span class="sub-text">Pesan</span>
                                        <th class="nk-tb-col"><span class="sub-text">Status</span>
                                        </th>
                                        <th class="nk-tb-col nkols text-end">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $index => $appointment)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col" data-order="{{ $index + 1 }}">
                                                <span>{{ $index + 1 }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-info">
                                                    <span>{{ $appointment->name }} </span>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <span>{{ $appointment->polyclinic }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-primary-dim">
                                                        <img src="{{ $appointment->doctor_photo }}" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <span>{{ $appointment->doctor }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <span>{{ \Carbon\Carbon::parse($appointment->meeting_date)->format('d M Y') }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <span>{{ $appointment->message }}</span>
                                            </td>
                                            <td class="nk-tb-col">
                                                <span
                                                    class=" 
                                                    {{ $appointment->status == 'pending'
                                                        ? 'text-warning'
                                                        : ($appointment->status == 'accepted'
                                                            ? 'text-success'
                                                            : ($appointment->status == 'rejected'
                                                                ? 'text-danger'
                                                                : 'text-secondary')) }}">
                                                    {{ $appointment->status == 'pending'
                                                        ? 'Pending'
                                                        : ($appointment->status == 'accepted'
                                                            ? 'Approve'
                                                            : ($appointment->status == 'rejected'
                                                                ? 'Ditolak'
                                                                : $appointment->status)) }}
                                                </span>
                                            </td>

                                            <td class="nk-tb-col nkols">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a
                                                                            href="{{ route('patient.show', $appointment->id) }}"><em
                                                                                class="icon ni ni-check"></em><span>Konfirmasi</span></a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('patient.edit', $appointment->id) }}"><em
                                                                                class="icon ni ni-cross"></em><span>Tolak</span></a>
                                                                    </li>
                                                                    <li> <a data-bs-toggle="modal"
                                                                            data-bs-target="#deletePatientModal"
                                                                            data-id="{{ $appointment->id }}">
                                                                            <em
                                                                                class="icon ni ni-trash"></em><span>Hapus</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
    </div>
@endsection
