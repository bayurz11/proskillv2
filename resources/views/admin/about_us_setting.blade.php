@section('title', 'ProSkill Akademia | Tentang Kami Setting')
<?php $page = 'tentang_kami_setting'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Tentang Kami Setting</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tentang Kami Setting</li>
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
                            <h4 class="card-title">Visi dan Tentang Perusahaan</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('aboutus_store') }}" method="POST">
                                @csrf
                                @if ($tentang->isNotEmpty())
                                    @php
                                        $tentangKami = $tentang->sortByDesc('created_at')->first();
                                    @endphp
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title Visi</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $tentangKami->title ?? '' }}">
                                        <small class="text-secondary">Note : Masukkan title dari visi ex(Visi ProSkill
                                            Akademia)</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="visi" class="form-label">Visi</label>
                                        <textarea class="form-control" id="visi" name="visi" rows="4" style="height: 100px; width: 100%;">{{ $tentangKami->visi ?? '' }}</textarea>
                                        <small class="text-secondary">Note: Isi Visi Perusahaan</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ket" class="form-label">Sekilas Tentang Perusahaan</label>
                                        <textarea class="form-control" id="ket" name="ket" rows="6" style="height: 200px; width: 100%;">{{ $tentangKami->ket ?? '' }}</textarea>
                                        <small class="text-secondary">Note: Tentang Perusahaan paragrap 1</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="nama_pimpinan" class="form-label">Nama Pimpinan</label>
                                        <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan"
                                            value="{{ $tentangKami->nama_pimpinan ?? '' }}">
                                        <small class="text-secondary">Note : Nama pimpinan</small>
                                    </div>
                                @else
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title Visi</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="">
                                        <small class="text-secondary">Note : Masukkan title dari visi ex(Visi ProSkill
                                            Akademia)</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="visi" class="form-label">Visi</label>
                                        <textarea class="form-control" id="visi" name="visi" rows="4" style="height: 100px; width: 100%;"></textarea>
                                        <small class="text-secondary">Note: Isi Visi Perusahaan</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ket" class="form-label">Sekilas Tentang Perusahaan</label>
                                        <textarea class="form-control" id="ket" name="ket" rows="6" style="height: 200px; width: 100%;"></textarea>
                                        <small class="text-secondary">Note: Tentang Perusahaan paragrap 1</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="nama_pimpinan" class="form-label">Nama Pimpinan</label>
                                        <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan">
                                        <small class="text-secondary">Note : Nama Pimpinan</small>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>
                        </div>


                    </div>
                </div>


            </div>
        </div>

    </div>
    </div>
    <!-- /Page Wrapper -->


@endsection
