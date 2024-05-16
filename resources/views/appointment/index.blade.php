@extends('layouts.app')

@push('js')
<script>
    $(document).ready(function() {

        $(document).on('show.bs.modal', '#deleteAppointmentModal', async function(event) {
            const button = $(event.relatedTarget);
            const id = button.data('id');
            const modal = $(this);
            const form = modal.find('#deleteForm');

            $.ajax({
                url: '{{ route('appointment.get', ':id') }}'.replace(':id', id),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    form.find('#deleteMessage').html(
                        `Apakah anda yakin ingin menghapus <strong>${data.name}</strong> sebagai <strong>janji temu</strong>?`
                    );
                },
                error: function(xhr, status, error) {
                    alert('Data tiak ditemukan');
                }
            });

            form.attr('action', '{{ route('appointment.destroy', ':id') }}'.replace(':id', id));
        });
    });
</script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Daftar Janji Temu</h3>
                        </div>
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
                                            </td><td class="nk-tb-col">
                                                <span class="{{ $appointment->status == 'pending' ? 'text-warning' : ($appointment->status == 'approved' ? 'text-success' : ($appointment->status == 'rejected' ? 'text-danger' : 'text-secondary')) }}">
                                                    {{ $appointment->status == 'pending' ? 'Pending' : ($appointment->status == 'approved' ? 'Approved' : ($appointment->status == 'rejected' ? 'Rejected' : $appointment->status)) }}
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
                                                                    <li>
                                                                        <form action="{{ route('appointments.confirm', $appointment->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit" class="btn d-flex justify-content-between"><em class="icon ni ni-check"></em><span>Konfirmasi</span></button>
                                                                        </form>
                                                                    </li>
                                                                    <li>
                                                                        <form action="{{ route('appointments.reject', $appointment->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit" class="btn d-flex justify-content-between"><em class="icon ni ni-cross"></em><span>Tolak</span></button>
                                                                        </form>
                                                                    </li>
                                                                    <li> <button type="button"
                                                                        class="btn d-flex justify-content-between"
                                                                        data-bs-toggle="modal" data-bs-target="#deleteAppointmentModal"
                                                                        data-modal-title="Hapus Appointment"
                                                                        data-id="{{ $appointment->id }}">
                                                                        <em class="icon ni ni-trash me-3"></em>Hapus
                                                                    </button>
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

        {{-- Delete Modal --}}
        <div class="modal fade" id="deleteAppointmentModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Obat</h5>
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" class="form-validate is-alter" id="deleteForm">
                            @csrf
                            @method('delete')
                            <div id="deleteMessage"></div>
                            <div class="form-group text-end mt-3">
                                <button type="submit" class="btn btn-lg btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
