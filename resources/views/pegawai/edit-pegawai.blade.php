@extends('layout.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Tambah Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pegawai</li>
                    <li class="breadcrumb-item active">Tambah Pegawai</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Pegawai</h5>

                            <!-- General Form Elements -->
                            <form action="{{route('pegawai.update', ['id'=>$pegawai->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai"
                                            value="{{ $pegawai->nama_pegawai }}">
                                        @error('nama_pegawai')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="jenis_kelamin"
                                            aria-label="Default select example">
                                            <option value="{{$pegawai->jenis_kelamin}}" hidden>{{$pegawai->jenis_kelamin}}</option>
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                            value="{{$pegawai->tanggal_lahir}}">
                                        @error('tanggal_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Departemen</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="id_departemens"
                                            aria-label="Default select example">
                                            @foreach ($departemen as $departemen)
                                            <option value="{{ $departemen->id }}" hidden>
                                                {{ $departemen->nama_departemen }}</option>
                                                <option value="{{ $departemen->id }}">{{ $departemen->nama_departemen }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_departemens')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="{{$pegawai->email}}" class="form-control" id="Email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Nomor Hp</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="nomor_hp" value="{{$pegawai->nomor_hp}}" class="form-control" id="inputNumber">
                                        @error('nomor_hp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="alamat" style="height: 100px" id="inputAlamat">{{$pegawai->alamat}}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
