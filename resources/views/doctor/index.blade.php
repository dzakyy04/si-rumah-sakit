@extends('layouts.app')

@push('js')
    <script>
        $(document).ready(function() {
            $(document).on('show.bs.modal', '#editDokterModal', function(event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');
                const modal = $(this);
                const form = modal.find('#editForm');

                $.getJSON('{{ route('doctor.get', ':id') }}'.replace(':id', id), function(data) {
                    form.find('#edit_name').val(data.name);
                    form.find('#edit_email').val(data.email);
                    form.find('#edit_phone_number').val(data.phone_number);
                    form.find('#edit_join_date').val(data.join_date);
                    form.find('#edit_gender').val(data.gender).change();
                    form.find('#edit_speciality').val(data.speciality_id).change();

                    // Update current photo
                    if (data.photo) {
                        modal.find('#current_photo').attr('src',data.photo).show();
                    } else {
                        modal.find('#current_photo').hide();
                    }
                });

                form.attr('action', '{{ route('doctor.update', ':id') }}'.replace(':id', id));
            });


            $(document).on('show.bs.modal', '#deleteDokterModal', function(event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');
                const modal = $(this);
                const form = modal.find('#deleteForm');

                $.ajax({
                    url: '{{ route('doctor.get', ':id') }}'.replace(':id', id),
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        form.find('#deleteMessage').html(
                            `Apakah anda yakin ingin menghapus dokter <strong>${data.name}</strong>?`
                        );
                    },
                    error: function(xhr, status, error) {
                        alert('Data tidak ditemukan');
                    }
                });

                form.attr('action', '{{ route('doctor.destroy', ':id') }}'.replace(':id', id));
            });
        });
    </script>

    @if (session()->has('success'))
        <script>
            let message = @json(session('success'));
            NioApp.Toast(`<h5>Berhasil</h5><p>${message}</p>`, 'success', {
                position: 'top-right',
            });
        </script>
    @endif
@endpush

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
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#searchModal"
                                        class="btn btn-outline-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-search"></em><span>Pencarian</span></button>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addDokterModal" data-modal-title="Tambah Dokter">
                                        <span class="icon ni ni-plus"></span>
                                        <span class="ms-1">Tambah Dokter</span>
                                    </button>
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
                                                            <button type="button"
                                                                class="btn d-flex justify-content-between"
                                                                data-bs-toggle="modal" data-bs-target="#editDokterModal"
                                                                data-modal-title="Edit Dokter"
                                                                data-id="{{ $doctor->id }}">
                                                                <em class="icon ni ni-edit me-3"></em>Edit
                                                            </button>
                                                        </li>
                                                        </li>
                                                        <li>
                                                            <button type="button"
                                                                class="btn d-flex justify-content-between"
                                                                data-bs-toggle="modal" data-bs-target="#deleteDokterModal"
                                                                data-modal-title="Hapus Dokter"
                                                                data-id="{{ $doctor->id }}">
                                                                <em class="icon ni ni-trash me-3"></em>Hapus
                                                            </button>
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
                                            <li><span>Jenis
                                                    Kelamin</span><span>{{ $doctor->gender == 'Male' ? 'Laki-Laki' : 'Perempuan' }}</span>
                                            </li>
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

    <div class="modal fade" id="searchModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cari Dokter</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" method="GET">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Ketikkan nama dokter yang ingin dicari">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select class="form-control form-select js-select2" id="jenis_kelamin" name="jenis_kelamin">
                                @php
                                    $selectedGender = request()->input('jenis_kelamin');
                                @endphp
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $selectedGender == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="perempuan" {{ $selectedGender == 'perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="spesialis">Spesialis:</label>
                            <select class="form-control form-select js-select2" id="spesialis" name="spesialis">
                                @php
                                    $selectedSpeciality = request()->input('spesialis');
                                @endphp
                                <option disabled selected>Pilih Spesialis</option>
                                @foreach ($specialities as $speciality)
                                    <option value="{{ $speciality->name }}"
                                        {{ $selectedSpeciality == $speciality->name ? 'selected' : '' }}>
                                        {{ $speciality->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-end mt-3">
                            <button type="submit" class="btn btn-lg btn-primary">Cari</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- Add Modal --}}
    <div class="modal fade" id="addDokterModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Dokter</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('doctor.store') }}" method="POST" class="form-validate is-alter"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="add_name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control @error('name') is-invalid @enderror""
                                    id="add_name" name="name" placeholder="Contoh: Aldi Taher" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_gender">Jenis Kelamin</label>
                            <div class="form-control-wrap">
                                <select id="add_gender"
                                    class="form-select js-select2 @error('gender') is-invalid @enderror"" name="gender"
                                    required>
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Male">Laki-laki</option>
                                    <option value="Female">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_speciality">Spesialisasi</label>
                            <div class="form-control-wrap">
                                <select
                                    class="form-control form-select js-select2 @error('speciality_id') is-invalid @enderror""
                                    id="add_speciality" name="speciality_id" required>
                                    <option disabled selected>Pilih Spesialis</option>
                                    @foreach ($specialities as $speciality)
                                        <option value="{{ $speciality->id }}">{{ $speciality->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_email">Email</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control @error('email') is-invalid @enderror""
                                    id="add_email" name="email" placeholder="Contoh: myemail123@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_phone_number">Nomor Telepon</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror""
                                    id="add_phone_number" name="phone_number" placeholder="Contoh: 08139384183" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_photo">Foto</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control @error('photo') is-invalid @enderror""
                                    id="add_photo" name="photo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_join_date">Tanggal Bergabung</label>
                            <div class="form-control-wrap">
                                <input type="date" class="form-control @error('join_date') is-invalid @enderror""
                                    id="add_join_date" name="join_date" required>
                            </div>
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    <div class="modal fade" id="editDokterModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Dokter</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="form-validate is-alter" enctype="multipart/form-data"
                        id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label" for="edit_name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="edit_name" name="name" placeholder="Contoh: Aldi Taher" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_gender">Jenis Kelamin</label>
                            <div class="form-control-wrap">
                                <select id="edit_gender"
                                    class="form-select js-select2 @error('gender') is-invalid @enderror" name="gender"
                                    required>
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Male">Laki-laki</option>
                                    <option value="Female">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_speciality">Spesialisasi</label>
                            <div class="form-control-wrap">
                                <select
                                    class="form-control form-select js-select2 @error('speciality_id') is-invalid @enderror"
                                    id="edit_speciality" name="speciality_id" required>
                                    <option disabled selected>Pilih Spesialis</option>
                                    @foreach ($specialities as $speciality)
                                        <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_email">Email</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="edit_email" name="email" placeholder="Contoh: myemail123@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_phone_number">Nomor Telepon</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="edit_phone_number" name="phone_number" placeholder="Contoh: 08139384183"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_photo">Foto</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                    id="edit_photo" name="photo">
                            </div>
                            <img id="current_photo" src="" alt="Current Photo"
                                style="max-width: 100%; margin-top: 10px;">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_join_date">Tanggal Bergabung</label>
                            <div class="form-control-wrap">
                                <input type="date" class="form-control @error('join_date') is-invalid @enderror"
                                    id="edit_join_date" name="join_date" required>
                            </div>
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteDokterModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteDokterModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDokterModalLabel">Hapus Dokter</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
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
