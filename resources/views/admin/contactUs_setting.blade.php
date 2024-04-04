@section('title', 'ProSkill Akademia | Hubungi Kami Setting')
<?php $page = 'hubungi_kami_setting'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Hubungi Kami Setting</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Hubungi Kami Setting</li>
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
                            <h4 class="card-title">Kunjungi kami</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contactus_store') }}" method="POST">
                                @csrf
                                @if ($hubungi->isNotEmpty())
                                    @php
                                        $hubungiKami = $hubungi->sortByDesc('created_at')->first();
                                    @endphp
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            value="{{ $hubungiKami->alamat ?? '' }}">
                                        <small class="text-secondary">Note : isi dengan alamat perusahaan </small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tlp" class="form-label">Whatsapp</label>
                                        <input type="number" class="form-control" id="tlp" name="tlp"
                                            value="{{ $hubungiKami->tlp ?? '' }}">
                                        <small class="text-secondary">Note : Isi dengan nomer Watsapp perusahaan</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Alamat email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ $hubungiKami->email ?? '' }}">
                                        <small class="text-secondary">Note : Masukkan Alamat email perusahaan</small>
                                    </div>
                                @else
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                        <small class="text-secondary">Note : isi dengan alamat perusahaan </small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tlp" class="form-label">Whatsapp</label>
                                        <input type="number" class="form-control" id="tlp" name="tlp">
                                        <small class="text-secondary">Note : Isi dengan nomer Watsapp perusahaan</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Alamat email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                        <small class="text-secondary">Note : Masukkan Alamat email perusahaan</small>
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
