@section('title', 'ProSkill Akademia | Artikel Setting')
<?php $page = 'artikel_setting'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Artikel Setting</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Artikel Setting</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">

                <div class="col-12">

                    <!-- General -->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Penulisan Artikel</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="Sertifikat alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('sertifikat_store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Sertifikat</label>
                                    <input type="file" accept="image/*" class="form-control" id="gambar"
                                        name="gambar">
                                    <small class="text-secondary">Note : Unggah gambar untuk Artikel yang akan
                                        ditulis</small>
                                </div>
                                <img id="preview" src="#" alt="Preview Gambar"
                                    style="max-width: 100%; max-height: 200px; display: none;">


                                <div class="mb-3">
                                    <label for="sertifikat_name" class="form-label">Nama Sertifikat</label>
                                    <input type="text" class="form-control" id="sertifikat_name" name="sertifikat_name"
                                        value="{{ old('sertifikat_name') }}">
                                    <small class="text-secondary">Note : Masukkan judul Artikel Yang Akan Ditulis
                                    </small>
                                </div>


                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!-- Table -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sertifikat as $key => $sertifikate)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $sertifikate->sertifikat_name }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/' . $sertifikate->img) }}" alt="Gambar"
                                                        style="max-width: 100px;">
                                                </td>


                                                <td>
                                                    <div class="actions">
                                                        <a class="btn btn-sm bg-success-light edit-btn"
                                                            data-bs-toggle="modal" data-id="{{ $sertifikate->id }}"
                                                            href="#edit_Sertifikat">
                                                            <i class="fe fe-pencil"></i> Edit
                                                        </a>

                                                        <a href="{{ route('sertifikat_destroy', ['id' => $sertifikate->id]) }}"
                                                            class="btn btn-sm bg-danger-light delete-article">
                                                            <i class="fe fe-trash"></i> Delete
                                                        </a>

                                                        <a class="btn btn-sm bg-warning-light"
                                                            href="{{ route('cetak_sertifikat', ['id' => $sertifikate->id]) }}"
                                                            target="_blank">
                                                            <i class="fe fe-print"></i> Print
                                                        </a>



                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.modal.edit_Sertifikat')
@endsection
