@extends('layout.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Departemen</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class='bx bx-building-house'></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totaldepartemen }}</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">
                                    <h5 class="card-title">Pegawai</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class='bx bx-user'></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalpegawai }}</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
