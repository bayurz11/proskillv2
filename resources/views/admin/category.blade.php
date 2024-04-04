@section('title', 'ProSkill Akademia | Category')
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
                        <h3 class="page-title">Category</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/index_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                            <h4 class="card-title">Kategori / Tag Artikel</h4>
                        </div>
                        <div class="card-body">
                            @if ($category->isEmpty())
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
                            <form action="{{ route('/category_store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Katogori/Tag</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name"
                                        value="">
                                    <small class="text-secondary">Note : Masukkan Kategori yang diinginkan</small>
                                </div>

                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>

                        </div>

                        <div class="card-body">
                            <h4>Tags Input</h4>
                            @foreach ($category as $cat)
                                <span class="badge"
                                    style="background-color: #028E83; color: white; font-size: 18px;">{{ $cat->category_name }}</span>
                            @endforeach
                        </div>


                    </div>
                </div>




            </div>
        </div>

    </div>
    </div>

    <!-- /General -->
    <!-- /Page Wrapper -->


@endsection
