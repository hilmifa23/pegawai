@extends('layout.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Tambah Departemen</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Departemen</li>
                    <li class="breadcrumb-item active">Tambah Departemen</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Departemen</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('departemen.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="nama_departemen" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_departemen" class="form-control" id="nama_departemen"
                                            placeholder="masukkan nama departemen">
                                        @error('nama_departemen')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
