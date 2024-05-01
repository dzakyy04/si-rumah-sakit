@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Patinent/ <strong class="text-primary small">Abu Bin Ishtiyak</strong></h3>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><em class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><em class="icon ni ni-property"></em><span>Diagnosis</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"><em class="icon ni ni-capsule-fill"></em><span>Prescription</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem4"><em class="icon ni ni-money"></em><span>Charges</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-wallet-in"></em><span>Payment</span> </a>
                                    </li>
                                </ul>
                                <div class="card-inner">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tabItem1">
                                            <div class="nk-block nk-block-between">
                                                <div class="nk-block-head">
                                                    <h6 class="title">Personal Information</h6>
                                                    <p>Patients personal information.</p>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <a class="btn btn-white btn-icon btn-outline-light" data-bs-toggle="modal" href="#editPersonal">
                                                        <em class="icon ni ni-edit"></em>
                                                    </a>
                                                </div>
                                            </div><!-- .nk-block-between  -->
                                            <div class="nk-block">
                                                <div class="profile-ud-list">
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Name</span>
                                                            <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Gender</span>
                                                            <span class="profile-ud-value">Male</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Age</span>
                                                            <span class="profile-ud-value">41 years 0 months 3 days</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Mobile</span>
                                                            <span class="profile-ud-value">+811 847-4958</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Date of Birth</span>
                                                            <span class="profile-ud-value">10 Aug, 1980</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Patient ID</span>
                                                            <span class="profile-ud-value">#P7085</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Bed</span>
                                                            <span class="profile-ud-value">104 - VIP Ward - 1st Floor</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Email Address</span>
                                                            <span class="profile-ud-value">info@softnio.com</span>
                                                        </div>
                                                    </div>
                                                </div><!-- .profile-ud-list -->
                                            </div><!-- .nk-block -->
                                            <div class="nk-block">
                                                <div class="nk-block-head nk-block-head-line">
                                                    <h6 class="title overline-title text-base">Additional Information</h6>
                                                </div><!-- .nk-block-head -->
                                                <div class="profile-ud-list">
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Consulant By</span>
                                                            <span class="profile-ud-value">Ernesto Vargas</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Patient Type</span>
                                                            <span class="profile-ud-value">In Patient</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Country</span>
                                                            <span class="profile-ud-value">United State</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-ud-item">
                                                        <div class="profile-ud wider">
                                                            <span class="profile-ud-label">Nationality</span>
                                                            <span class="profile-ud-value">United State</span>
                                                        </div>
                                                    </div>
                                                </div><!-- .profile-ud-list -->
                                            </div><!-- .nk-block -->
                                            <div class="nk-divider divider md"></div>
                                            <div class="nk-block">
                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                    <h5 class="title">Doctors Note</h5>
                                                    <a href="#" class="link link-sm">+ Add Note</a>
                                                </div><!-- .nk-block-head -->
                                                <div class="bq-note">
                                                    <div class="bq-note-item">
                                                        <div class="bq-note-text">
                                                            <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                        </div>
                                                        <div class="bq-note-meta">
                                                            <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                            <span class="bq-note-sep sep">|</span>
                                                            <span class="bq-note-by">By <span>Softnio</span></span>
                                                            <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                        </div>
                                                    </div><!-- .bq-note-item -->
                                                    <div class="bq-note-item">
                                                        <div class="bq-note-text">
                                                            <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                        </div>
                                                        <div class="bq-note-meta">
                                                            <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                            <span class="bq-note-sep sep">|</span>
                                                            <span class="bq-note-by">By <span>Softnio</span></span>
                                                            <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                        </div>
                                                    </div><!-- .bq-note-item -->
                                                </div><!-- .bq-note -->
                                            </div><!-- .nk-block -->
                                        </div><!-- tab pane -->
                                        <div class="tab-pane" id="tabItem2">
                                            <div class="nk-block nk-block-between">
                                                <div class="nk-block-head">
                                                    <h6 class="title">Diagnosis Information</h6>
                                                    <p>Patients diagnosis information.</p>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addDiagnosis">
                                                        <em class="icon ni ni-plus"></em>
                                                    </a>
                                                </div>
                                            </div><!-- .nk-block-between  -->
                                            <div class="nk-block">
                                                <div class="card">
                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span class="sub-text">Report Type</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Description</span></div>
                                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>CT Scan</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>10 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi ipsam molestiae aut.</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-success">Done</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                            <em class="icon ni ni-download"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>Blood Test</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>11 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Dolor sit amet consectetur adipisicing elit. Modi ipsam molestiae aut.</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-warning">Pending</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                            <em class="icon ni ni-download"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>Blood Analysis</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>11 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Tempore aut incidunt accusamus accusantium deleniti? Labore odio aperiam mollitia quaerat quos!</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-warning">Pending</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                            <em class="icon ni ni-download"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>Vascular Sonography</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>10 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Lquia soluta illo sed veniam repudiandae esse sequi qui impedit facilis laboriosam sapiente suscipit!</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-success">Done</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                            <em class="icon ni ni-download"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
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
                                                    <h6 class="title">Prescription Information</h6>
                                                    <p>Patients prescription information.</p>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPrescription">
                                                        <em class="icon ni ni-plus"></em>
                                                    </a>
                                                </div>
                                            </div><!-- .nk-block-between  -->
                                            <div class="nk-block">
                                                <div class="card">
                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span class="sub-text">Medicine</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Medicine Category</span></div>
                                                            <div class="nk-tb-col"><span class="sub-text">Dosage</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Instruction</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Prescribed By</span></div>
                                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Status</span></div>
                                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>Erovit plus</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Capsule</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="fw-medium">1 - 0 - 1</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Take after full meal for 7 days.</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Ernesto Vargas</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-mb">
                                                                <span class="tb-status text-success">Active</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>Napa Extra</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Tablet</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="fw-medium">1 - 1 - 1</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Take after full meal for 3 days.</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Ernesto Vargas</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-mb">
                                                                <span class="tb-status text-success">Active</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>Sergel</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Capsule</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="fw-medium">1 - 0 - 1</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Take before meal for 15 days.</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>Ernesto Vargas</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-mb">
                                                                <span class="tb-status text-success">Active</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                    </div><!-- .nk-tb-list -->
                                                </div><!-- .card -->
                                            </div><!-- .nk-block -->
                                        </div>
                                        <!--tab pane-->
                                        <div class="tab-pane" id="tabItem4">
                                            <div class="nk-block nk-block-between">
                                                <div class="nk-block-head">
                                                    <h6 class="title">Charges Information</h6>
                                                    <p>Patients charges for service.</p>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addCharges">
                                                        <em class="icon ni ni-plus"></em>
                                                    </a>
                                                </div>
                                            </div><!-- .nk-block-between  -->
                                            <div class="nk-block">
                                                <div class="card">
                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                            <div class="nk-tb-col"><span class="sub-text">Category</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Charges Type</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Standrad Charges ($)</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">TPA Charges ($)</span></div>
                                                            <div class="nk-tb-col"><span class="sub-text">Applied ($)</span></div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>10 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>Eye Check</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Procedures</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>35</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>00</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>35</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>10 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>Blood Analysis</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Procedures</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>65</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>00</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>65</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                    </div><!-- .nk-tb-list -->
                                                </div><!-- .card -->
                                            </div><!-- .nk-block -->
                                        </div>
                                        <!--tab pane-->
                                        <div class="tab-pane" id="tabItem5">
                                            <div class="nk-block nk-block-between">
                                                <div class="nk-block-head">
                                                    <h6 class="title">Payment Information</h6>
                                                    <p>Patients payment information.</p>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPayment">
                                                        <em class="icon ni ni-plus"></em>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="nk-block">
                                                <div class="card">
                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span class="sub-text">Date</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Payment Method</span></div>
                                                            <div class="nk-tb-col"><span class="sub-text">Amount ($)</span></div>
                                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>10 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Cash</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>200</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-success">Paid</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span>11 Feb 2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>Cash</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span>1923</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-warning">Due</span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                    </div><!-- .nk-tb-list -->
                                                </div><!-- .card -->
                                            </div><!-- .nk-block -->
                                        </div>
                                        <!--tab pane-->
                                    </div>
                                    <!--tab content-->
                                </div>
                                <!--card inner-->
                            </div><!-- .card-content -->
                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <div class="badge bg-outline-light rounded-pill ucap">Patinet</div>
                                                <h5>Abu Bin Ishtiyak</h5>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner card-inner-sm">
                                        <ul class="btn-toolbar justify-center gx-1">
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">$2123</span>
                                                    <span class="sub-text">Total Bill</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">$200</span>
                                                    <span class="sub-text">Paid</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">$1923</span>
                                                    <span class="sub-text">Due</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <span class="sub-text">Patient ID:</span>
                                                <span>#P7085</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Admit Date</span>
                                                <span>15 Feb, 2019 01:02 PM</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Condition</span>
                                                <span class="lead-text text-success">Normal</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Discharged Date</span>
                                                <span>16 Feb, 2019</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title-alt mb-3">Groups</h6>
                                        <ul class="g-1">
                                            <li class="btn-group">
                                                <a class="btn btn-xs btn-light btn-dim" href="#">surgery</a>
                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                            </li>
                                            <li class="btn-group">
                                                <a class="btn btn-xs btn-light btn-dim" href="#">cardiology</a>
                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                            </li>
                                            <li class="btn-group">
                                                <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                            </li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-aside -->
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