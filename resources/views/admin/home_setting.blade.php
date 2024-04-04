@section('title', 'ProSkill Akademia | Home Setting')
<?php $page = 'home_setting'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Home Setting</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home Setting</li>
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
                            <h4 class="card-title">Jam Operasional dan Alamat</h4>
                        </div>
                        <div class="card-body">
                            @if ($jam_alamat->isEmpty())
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>MAAF!</strong> Data jam operasional dan alamat tidak tersedia saat ini.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('operational_store') }}" method="POST">
                                @csrf
                                @php
                                    $latestJamAlamat = $jam_alamat->sortByDesc('created_at')->first();
                                @endphp
                                <div class="mb-3">
                                    <label for="jam_opr" class="form-label">Jam Operasional</label>
                                    <input type="text" class="form-control" id="jam_opr" name="jam_opr"
                                        value="{{ $latestJamAlamat->jam_opr ?? '' }}">
                                    <small class="text-secondary">Note : isi dengan waktu operasional</small>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="{{ $latestJamAlamat->alamat ?? '' }}">
                                    <small class="text-secondary">Note : isi dengan alamat perusahaan </small>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- /General -->
    <!-- /Page Wrapper -->


@endsection
