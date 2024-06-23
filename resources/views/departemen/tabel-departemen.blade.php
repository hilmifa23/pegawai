@extends('layout.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Departemen</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Departeman</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('departemen.create') }}"
                                    class="btn btn-success">Tambah</a></h5>


                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Departemen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departemen as $departemen)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $departemen->nama_departemen }}</td>
                                            <td>
                                                <a href="{{route('departemen.edit',['id'=>$departemen->id])}}" class="btn btn-primary"><i class='bx bxs-edit'> Edit</i></a>
                                                <a data-bs-toggle="modal" data-bs-target="#basicModal{{$departemen->id}}" class="btn btn-danger"><i class="bx bx-trash"></i> hapus</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="basicModal{{$departemen->id}}" tabindex="-1">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah kamu yakin ingin menghapus data departemen <b>{{$departemen->nama_departemen}}</b>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('departemen.delete',['id'=>$departemen->id])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class='bx bx-trash'>Hapus</i></button>
                                                    </form>

                                                </div>
                                              </div>
                                            </div>
                                          </div><!-- End Basic Modal-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
