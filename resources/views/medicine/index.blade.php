@extends('layouts.app')

@push('js')
    <script src="{{ asset('assets/js/libs/datatable-btns.js?ver=3.0.3') }}"></script>
    <script src="{{ asset('assets/js/example-toastr.js?ver=3.0.3') }}"></script>

    <script>
        $(document).ready(function() {
            $(document).on('show.bs.modal', '#editMedicineModal', function(event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');
                const modal = $(this);
                const form = modal.find('#editMedicineForm');
                const categorySelect = form.find('#edit_category_name');

                // Mengambil data obat berdasarkan ID dengan AJAX
                $.getJSON('{{ route('medicine.get', ':id') }}'.replace(':id', id), function(data) {
                    // Mengisi nilai-nilai awal pada form edit
                    form.find('#edit_medicine_name').val(data.medicine_name);
                    categorySelect.find('option').prop('selected', false);
                    categorySelect.find('option[value="' + data.category_name + '"]').prop(
                        'selected', true);
                    categorySelect.select2();
                    form.find('#edit_generic_name').val(data.generic_name);
                    form.find('#edit_strength').val(data.strength);
                    form.find('#edit_manufacturer_name').val(data.manufacturer_name);
                    form.find('#edit_unit').val(data.unit);
                    form.find('#edit_stock').val(data.stock);
                    // Jika ada field lain, Anda dapat menambahkannya di sini
                });

                // Mengatur action form untuk update obat
                form.attr('action', '{{ route('medicine.update', ':id') }}'.replace(':id', id));
            });


            $(document).on('show.bs.modal', '#deleteMedicineModal', async function(event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');
                const modal = $(this);
                const form = modal.find('#deleteForm');

                $.ajax({
                    url: '{{ route('medicine.get', ':id') }}'.replace(':id', id),
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        form.find('#deleteMessage').html(
                            `Apakah anda yakin ingin menghapus <strong>${data.medicine_name}</strong> sebagai <strong>obat</strong>?`
                        );
                    },
                    error: function(xhr, status, error) {
                        alert('Data tiak ditemukan');
                    }
                });

                form.attr('action', '{{ route('medicine.destroy', ':id') }}'.replace(':id', id));
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
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content mb-3">
                <h3 class="nk-block-title page-title">Obat</h3>
            </div><!-- .nk-block-head-content -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedicineModal"
                data-modal-title="Tambah Medicine">
                <span class="icon ni ni-plus"></span>
                <span class="ms-1">Tambah Obat</span>
            </button>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">No</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Nama</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Kategori</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">General</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Stok</span></th>
                            <th class="nk-tb-col nk-tb-col-tools text-end">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicines as $index => $medicine)
                            <tr class="nk-tb-item">
                                <td class="nk-tb-col tb-col-mb" data-order="{{ $index + 1 }}">
                                    <span>{{ $index + 1 }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <div class="user-info">
                                        <span>{{ $medicine->medicine_name }} </span>
                                    </div>
                                </td>
                                <td class="nk-tb-col tb-col-mb" data-order="{{ $medicine->category_name }}">
                                    <span>{{ $medicine->category_name }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $medicine->generic_name }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-lg">
                                    <span>{{ $medicine->stock }}</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li> <button type="button"
                                                                class="btn d-flex justify-content-between"
                                                                data-bs-toggle="modal" data-bs-target="#editMedicineModal"
                                                                data-modal-title="Edit Medicine"
                                                                data-id="{{ $medicine->id }}">
                                                                <em class="icon ni ni-edit me-3"></em>Edit
                                                            </button>
                                                        </li>
                                                        <li> <button type="button"
                                                                class="btn d-flex justify-content-between"
                                                                data-bs-toggle="modal" data-bs-target="#deleteMedicineModal"
                                                                data-modal-title="Hapus Medicine"
                                                                data-id="{{ $medicine->id }}">
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
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->

    {{-- Add Modal --}}
    <div class="modal fade" id="addMedicineModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Obat</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('medicine.store') }}" method="POST" class="form-validate is-alter">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="add_medicine_name">Nama Obat</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="add_medicine_name" name="medicine_name"
                                    placeholder="Nama Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_category_name">Kategori</label>
                            <div class="form-control-wrap">
                                <select id="add_category_name" class="form-select js-select2" name="category_name" required>
                                    <option selected disabled>Pilih Kategori</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Capsule">Capsule</option>
                                    <option value="Syrup">Syrup</option>
                                    <option value="Powder for Suspension">Powder for Suspension</option>
                                    <option value="IM/IV Injection">IM/IV Injection</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="add_generic_name">Nama Generik</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="add_generic_name" name="generic_name"
                                    placeholder="Nama Generik">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_strength">Kekuatan</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="add_strength" name="strength"
                                    placeholder="Kekuatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_manufacturer_name">Nama Produsen</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="add_manufacturer_name"
                                    name="manufacturer_name" placeholder="Nama Produsen">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_unit">Unit</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="add_unit" name="unit"
                                    placeholder="Unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="add_stock">Stok</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="add_stock" name="stock"
                                    placeholder="Ukuran Unit">
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
    <div class="modal fade" id="editMedicineModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Obat</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form id="editMedicineForm" method="POST" class="form-validate is-alter">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label" for="edit_medicine_name">Nama Obat</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit_medicine_name" name="medicine_name"
                                    placeholder="Nama Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_category_name">Kategori</label>
                            <div class="form-control-wrap">
                                <select id="edit_category_name" class="form-select js-select2" name="category_name"
                                    required>
                                    <option selected disabled>Pilih Kategori</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Capsule">Capsule</option>
                                    <option value="Syrup">Syrup</option>
                                    <option value="Powder for Suspension">Powder for Suspension</option>
                                    <option value="IM/IV Injection">IM/IV Injection</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_generic_name">Nama Generik</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit_generic_name" name="generic_name"
                                    placeholder="Nama Generik">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_strength">Kekuatan</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit_strength" name="strength"
                                    placeholder="Kekuatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_manufacturer_name">Nama Produsen</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit_manufacturer_name"
                                    name="manufacturer_name" placeholder="Nama Produsen">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_unit">Unit</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit_unit" name="unit"
                                    placeholder="Unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit_stock">Stok</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="edit_stock" name="stock"
                                    placeholder="Stok">
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


    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteMedicineModal">
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
