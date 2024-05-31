@extends('layouts.app')

@push('js')
    @if (session()->has('success'))
        <script>
            let message = @json(session('success'));
            NioApp.Toast(`<h5>Berhasil</h5><p>${message}</p>`, 'success', {
                position: 'top-right',
            });
        </script>
    @endif

    <script>
        const patientForm = $('#patientForm');
        const patientModal = $('#patientModal');
        const nameInput = patientModal.find('#name');
        const modalTitle = patientModal.find('#modalTitle');

        const deletePatientForm = $('#deletePatientForm');
        const deletePatientModal = $('#deletePatientModal');
        const deleteMessage = deletePatientModal.find('#deleteMessage');

        async function fetchData(id) {
            try {
                const response = await fetch('{{ route('patient.get', ':id') }}'.replace(':id', id));
                if (!response.ok) {
                    throw new Error('Data tidak ditemukan');
                }
                const data = await response.json();
                nameInput.val(data.name);
                deleteMessage.html(
                    `Apakah anda yakin ingin menghapus <strong>${data.name}</strong> sebagai pasien?`
                )
            } catch (error) {
                alert(error.message);
            }
        }

        function clearModalForm() {
            nameInput.val('');
        }

        $(document).ready(function() {
            // Delete modal
            $(document).on('show.bs.modal', '#deletePatientModal', function(event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');

                fetchData(id);
                deletePatientForm.attr('action', '{{ route('patient.delete', ':id') }}'.replace(':id', id));
            });
        });
    </script>
@endpush

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Data Pasien</h4>
                <div class="nk-block-des">
                    <p>Anda memiliki total {{ $totalPatients }} pasien rawat inap di rumah sakit.</p>
                </div>
            </div>

            <a href="{{ route('patient.create') }}" class="btn btn-primary mt-2">
                <span class="ni ni-plus fs-4"></span>
                <span class="ms-1">Tambah Pasien</span>
            </a>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">No</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Nama</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Umur</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Jenis Kelamin</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Alasan Masuk</span></th>
                            <th class="nk-tb-col nk-tb-col-tools text-end">Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $index => $patient)
                            <tr class="nk-tb-item">
                                <td class="nk-tb-col tb-col-mb" data-order="{{ $index + 1 }}">
                                    <span>{{ $index + 1 }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="user-info">
                                        <span>{{ $patient->name }} </span>
                                    </div>
                                </td>
                                <td class="nk-tb-col tb-col-mb" data-order="{{ $patient->age }}">
                                    <span>{{ $patient->age }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $patient->sex }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                    <span>{{ $patient->reason_for_admission }}</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="{{ route('patient.show', $patient->id) }}"><em
                                                                    class="icon ni ni-eye"></em><span>Lihat Detail</span></a>
                                                        </li>
                                                        <li><a href="{{ route('patient.edit', $patient->id) }}"><em
                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                        </li>
                                                        <li> <a data-bs-toggle="modal" data-bs-target="#deletePatientModal"
                                                                data-id="{{ $patient->id }}">
                                                                <em class="icon ni ni-trash"></em><span>Hapus</span>
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
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->


    {{-- Delete Modal --}}
    <div class="modal fade" id="deletePatientModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Pasien</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="form-validate is-alter" id="deletePatientForm">
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
