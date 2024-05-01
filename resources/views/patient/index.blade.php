@extends('layouts.app')

{{-- @push('js')
<script>
    $(document).ready(function() {
        // Fill input fields with patient data on edit modal
        $(document).on('show.bs.modal', '#editPatientModal', function(event) {
            const button = $(event.relatedTarget);
            const id = button.data('id');
            const modal = $(this);
            const form = modal.find('#editForm');

            $.getJSON('{{ route('patient.get', ':id') }}'.replace(':id', id), function(data) {
                form.find('#name').val(data.name);
                form.find('#age').val(data.age);
                form.find('input[name="gender"][value="' + data.gender + '"]').prop('checked',
                    true);
                form.find('#add_address').val(data.address);
                form.find('#systolic_blood_pressure').val(data.systolic_blood_pressure !==
                    null ? data.systolic_blood_pressure : '-');
                form.find('#diastolic_blood_pressure').val(data.diastolic_blood_pressure !==
                    null ? data.diastolic_blood_pressure : '-');
                form.find('input[name="blood_glucose_type"][value="' + data.blood_glucose_type +
                    '"]').prop('checked',
                    true);
                form.find('#add_blood_glucose').val(data.blood_glucose !== null ? data
                    .blood_glucose : '-');
                form.find('#add_uric_acid').val(data.uric_acid !== null ? data.uric_acid : '-');
                form.find('#add_cholesterol').val(data.cholesterol !== null ? data.cholesterol :
                    '-');


            });

            form.attr('action', '{{ route('patient.update', ':id') }}'.replace(':id', id));
        });

        // Fill input fields with patient data on show modal
        $(document).on('show.bs.modal', '#showPatientModal', function(event) {
            const button = $(event.relatedTarget);
            const id = button.data('id');
            const modal = $(this);
            const form = modal.find('#editForm');
            const printLink = modal.find('.print');

            printLink.attr('href', '{{ route('patient.print', ':id') }}'.replace(':id', id));

            $.getJSON('{{ route('patient.get', ':id') }}'.replace(':id', id), function(data) {
                form.find('#name').val(data.name);
                form.find('#age').val(data.age);
                form.find('input[name="gender"][value="' + data.gender + '"]').prop('checked',
                    true);
                form.find('#add_address').val(data.address);
                form.find('#systolic_blood_pressure').val(data.systolic_blood_pressure !==
                    null ? data.systolic_blood_pressure : '-');
                form.find('#diastolic_blood_pressure').val(data.diastolic_blood_pressure !==
                    null ? data.diastolic_blood_pressure : '-');
                form.find('input[name="blood_glucose_type"][value="' + data.blood_glucose_type +
                    '"]').prop('checked',
                    true);
                form.find('#add_blood_glucose').val(data.blood_glucose !== null ? data
                    .blood_glucose : '-');
                form.find('#add_uric_acid').val(data.uric_acid !== null ? data.uric_acid : '-');
                form.find('#add_cholesterol').val(data.cholesterol !== null ? data.cholesterol :
                    '-');
            });
        });

        // Remove dashes from input fields after submit
        $('#editForm').submit(function() {
            $('.remove-dash').each(function() {
                var inputValue = $(this).val();
                $(this).val(inputValue.replace(/-/g, ''));
            });
        });

        // Fill input fields with patient data on delete modal
        $(document).on('show.bs.modal', '#deletePatientModal', async function(event) {
            const button = $(event.relatedTarget);
            const id = button.data('id');
            const modal = $(this);
            const form = modal.find('#deleteForm');

            $.ajax({
                url: '{{ route('patient.get', ':id') }}'.replace(':id', id),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    form.find('#deleteMessage').html(
                        `Apakah anda yakin ingin menghapus <strong>${data.name}</strong> sebagai <strong>pasien</strong>?`
                    );
                },
                error: function(xhr, status, error) {
                    alert('Data tiak ditemukan');
                }
            });

            form.attr('action', '{{ route('patient.delete', ':id') }}'.replace(':id', id));
        });

        // Make datatable scrollable
        $('.datatable-wrap').each(function(index) {
            const id = 'datatable-' + index;
            $(this).attr('id', id);
            const datatableWrap = $("#" + id);
            const wrappingDiv = $("<div>").addClass("w-100").css("overflow-x",
                "scroll");
            datatableWrap.children().appendTo(wrappingDiv);
            datatableWrap.append(wrappingDiv);
        });

        // Toastr
        @if (session()->has('success'))
            let message = @json(session('success'));
            NioApp.Toast(`<h5>Berhasil</h5><p>${message}</p>`, 'success', {
                position: 'top-right',
            });
        @endif
    });
</script>
@endpush --}}

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Patients Data</h4>
            <div class="nk-block-des">
                <p>You have total x ipd patients in hospital.</p>
            </div>
        </div>
    </div>
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col"><span class="sub-text">No</span></th>
                        <th class="nk-tb-col"><span class="sub-text">User</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col tb-col-mb" data-order="1">
                            <span class="tb-amount">1</span>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>info@softnio.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">35040.34 <span class="currency">USD</span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>+811 847-4958</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                            <ul class="list-status">
                                <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                            </ul>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <span>05 Oct 2019</span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{ route('patient.show')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                <li><a data-bs-toggle="modal" href="#deleteInPatient"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->

<div class="modal fade" tabindex="-1" role="dialog" id="editInPatient">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Update In Patient</h5>
                <form action="#" class="mt-4">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editName">Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="editName" value="Abu Bin Isthiyak" placeholder="Name">
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editEmail">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" class="form-control" id="editEmail" value="info@softnio.com" placeholder="example@email.com">
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editMobile">Mobile Number</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="editMobile" placeholder="Mobile No." value="+811 847-4958">
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-placeholder="Select Gender">
                                        <option value="">Select</option>
                                        <option value="option_select_sex">Male</option>
                                        <option value="option_select_sex">Female</option>
                                        <option value="option_select_sex">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Bed Group</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-placeholder="Select Bed Group">
                                        <option value="">Select</option>
                                        <option value="option_select_bed">Cabin - 4th Floor</option>
                                        <option value="option_select_bed">Male Ward - 1st Floor</option>
                                        <option value="option_select_bed">Female Ward - 1st Floor</option>
                                        <option value="option_select_bed">Private Ward - 2nd Floor</option>
                                        <option value="option_select_bed">Cabin - 4th Floor</option>
                                        <option value="option_select_bed">ICU - 3rd Floor</option>
                                        <option value="option_select_bed">NICU - 3rd Floor</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Bed Number</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-placeholder="Select multiple options">
                                        <option value="default_option">201</option>
                                        <option value="option_select_bednum">101</option>
                                        <option value="option_select_bednum">102</option>
                                        <option value="option_select_bednum">103</option>
                                        <option value="option_select_bednum">105</option>
                                        <option value="option_select_bednum">201</option>
                                        <option value="option_select_bednum">202</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Consulant By</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-placeholder="Select multiple options">
                                        <option value="default_option">Ernesto Vargas</option>
                                        <option value="option_select_consulant">Ernesto Vargas</option>
                                        <option value="option_select_consulant">Janet Snyder</option>
                                        <option value="option_select_consulant">Amelia Grant</option>
                                        <option value="option_select_consulant">Debra Grant</option>
                                        <option value="option_select_consulant">Snyder Debra</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="testLabel">Test Reports</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" multiple class="form-file-input" id="testReport">
                                        <label class="form-file-label" for="testReport">Choose files</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Admit Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="10-02-2020">
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                </li>
                                <li>
                                    <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                </li>
                            </ul>
                        </div><!-- .col -->
                    </div>
                </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
@endsection