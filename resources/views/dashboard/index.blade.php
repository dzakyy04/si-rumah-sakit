@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Dashboard</h3>
                        <div class="nk-block-des text-soft">
                            <p>Welcome to Team Diwa Hospital</p>
                        </div>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-md-6 col-xxl-3">
                        <div class="card h-100">
                            <div class="card-inner">
                                <div class="card-title-group mb-2">
                                    <div class="card-title">
                                        <h6 class="title">Hospital Statistics</h6>
                                    </div>
                                </div>
                                <ul class="nk-store-statistics">
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Janji Temu</div>
                                            <div class="count"></div>
                                        </div>
                                        <em class="icon ni bg-blue-dim ni-list-index-fill"></em>
                                    </li>
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Dokter</div>
                                            <div class="count">{{ $doctors }}</div>
                                        </div>
                                        <em class="icon bg-primary-dim ni ni-plus-medi"></em>
                                    </li>
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Pasien</div>
                                            <div class="count">{{ $totalPatients }}</div>
                                        </div>
                                        <em class="icon bg-warning-dim ni ni-users"></em>
                                    </li>
                                    <li class="item">
                                        <div class="info">
                                            <div class="title">Obat</div>
                                            <div class="count">{{ $medicines }}</div>
                                        </div>
                                        <em class="icon bg-danger-dim ni ni-capsule"></em>
                                    </li>
                                </ul>
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    
                </div><!-- .row -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
@endsection