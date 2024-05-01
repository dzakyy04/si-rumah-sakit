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
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="title nk-block-title">Personal Info</h5>
                                        <p>Add common infomation like Name, Email etc </p>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="full-name" placeholder="Full Name">
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Date of Birth</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar"></em>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Gender</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="option_select_gender">Male</option>
                                                        <option value="option_select_gender">Female</option>
                                                        <option value="option_select_gender">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Phone</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" id="phone-no" placeholder="Phone no">
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email</label>
                                                <div class="form-control-wrap">
                                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">National ID</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" multiple class="form-file-input" id="nid">
                                                        <label class="form-file-label" for="nid">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-5 col-md-8">
                                            <div class="form-group">
                                                <label class="form-label">Adddress</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="address" placeholder="Address">
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
                                        <h5 class="title nk-block-title">General Info</h5>
                                        <p>Some common medical information about patient. </p>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Blood Group</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Group">
                                                        <option value="">Select</option>
                                                        <option value="option_select_blood">A+</option>
                                                        <option value="option_select_blood">A-</option>
                                                        <option value="option_select_blood">AB+</option>
                                                        <option value="option_select_blood">AB-</option>
                                                        <option value="option_select_blood">B+</option>
                                                        <option value="option_select_blood">B-</option>
                                                        <option value="option_select_blood">O+</option>
                                                        <option value="option_select_blood">O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Height</label>
                                                <input type="text" class="form-control" id="height" placeholder="Height">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Weight</label>
                                                <input type="text" class="form-control" id="weight" placeholder="Weight">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Blood Pressure</label>
                                                <input type="text" class="form-control" id="bp" placeholder="Blood Pressure">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Pulse</label>
                                                <input type="text" class="form-control" id="pulse" placeholder="Pulse">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Temperature</label>
                                                <input type="text" class="form-control" id="temperature" placeholder="Temperature">
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
                                        <h5 class="title nk-block-title">Madical Condition</h5>
                                        <p>Details information about patient current medical condition. </p>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-8">
                                            <div class="form-group">
                                                <label class="form-label">Symptoms Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="symptoms" placeholder="Symptoms">
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Symptoms Type</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Symptoms">
                                                        <option value="">Select</option>
                                                        <option value="option_select_symptoms">General Symptoms</option>
                                                        <option value="option_select_symptoms">Uncommon Symptoms</option>
                                                        <option value="option_select_symptoms">Inherited Symptoms</option>
                                                        <option value="option_select_symptoms">Viral Symptoms</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Casualty</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Casualty">
                                                        <option value="">Select</option>
                                                        <option value="option_select_casualty">Yes</option>
                                                        <option value="option_select_casualty">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Department</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Department">
                                                        <option value="">Select</option>
                                                        <option value="option_select_department">Allergy and immunology</option>
                                                        <option value="option_select_department">Anesthesiology</option>
                                                        <option value="option_select_department">Cardiology</option>
                                                        <option value="option_select_department">Dermatology</option>
                                                        <option value="option_select_department">Diagnostic radiology</option>
                                                        <option value="option_select_department">Emergency medicine</option>
                                                        <option value="option_select_department">Neurology</option>
                                                        <option value="option_select_department">Obstetrics and gynecology</option>
                                                        <option value="option_select_department">Ophthalmology</option>
                                                        <option value="option_select_department">Pathology</option>
                                                        <option value="option_select_department">Pediatrics</option>
                                                        <option value="option_select_department">Psychiatry</option>
                                                        <option value="option_select_department">Surgery</option>
                                                        <option value="option_select_department">Urology</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Consultant Doctor</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Doctor">
                                                        <option value="">Select</option>
                                                        <option value="option_select_consulant">Ernesto Vargas</option>
                                                        <option value="option_select_consulant">Janet Snyder</option>
                                                        <option value="option_select_consulant">Amelia Grant</option>
                                                        <option value="option_select_consulant">Debra Grant</option>
                                                        <option value="option_select_consulant">Snyder Debra</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Patient Type</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Type">
                                                        <option value="">Select</option>
                                                        <option value="option_select_patient">OPD Patient</option>
                                                        <option value="option_select_patient">IPD Patient</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Admit Date</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar"></em>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Bed Group</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Bed Group">
                                                        <option value="default_option">Select</option>
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
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Bed Number</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="Select Bed">
                                                        <option value="">Select</option>
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
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Test Report</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" multiple class="form-file-input" id="testReport">
                                                        <label class="form-file-label" for="testReport">Choose files</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label">Symptoms Description</label>
                                                <div class="form-control-wrap">
                                                    <div class="quill-basic">
                                                        <p>Please describe little bit!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add Patient</button>
                                            </div>
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->
                                </div>
                            </div><!-- .card-inner -->
                        </div>
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection