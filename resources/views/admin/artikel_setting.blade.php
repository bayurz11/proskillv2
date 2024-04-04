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
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('artikel_store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Benner/Gambar</label>
                                    <input type="file" accept="image/*" class="form-control" id="gambar"
                                        name="gambar">
                                    <small class="text-secondary">Note : Unggah gambar untuk Artikel yang akan
                                        ditulis</small>
                                </div>
                                <img id="preview" src="#" alt="Preview Gambar"
                                    style="max-width: 100%; max-height: 200px; display: none;">


                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul Artikel</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title') }}">
                                    <small class="text-secondary">Note : Masukkan judul Artikel Yang Akan Ditulis
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <div class="mb-3">
                                        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                                        <textarea id="isi" style="height: 800px; width: 100%; font-size: 18px;"></textarea> <!-- Menggunakan <textarea> untuk CKEditor -->
                                        <input type="hidden" id="isi_input" name="isi">
                                        <small class="text-secondary">Note: Masukkan Isi dari artikel yang akan
                                            dibuat</small>
                                    </div>

                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#isi'))
                                            .then(editor => {
                                                editor.model.document.on('change:data', () => {
                                                    const isi_input = document.querySelector('#isi_input');
                                                    isi_input.value = editor.getData();
                                                });
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>


                                <div class="mb-3">
                                    <label for="tgl" class="form-label">Tanggal Ditulis</label>
                                    <input type="text" class="form-control" id="tgl" name="tgl" readonly>
                                    <small class="text-secondary">Note : otomatis diisi sesuai waktu pembuatan</small>
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Tags / Kategori Artikel</label>
                                    <input type="text" class="form-control" id="category_id" name="category_id">
                                    <small class="text-secondary">Note : Isi Dengan Kategori atau Tags</small>
                                </div>

                                <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />

                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var input = document.querySelector('input[name=category_id]');

                                        new Tagify(input, {
                                            whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                            dropdown: {
                                                enabled: 1,
                                                maxItems: 5
                                            }
                                        });
                                    });
                                </script>


                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upload link Youtube</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('/link_store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Masukkan link Youtube</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ old('link') }}">
                                    <small class="text-secondary">Note : Masukkan link youtube anda</small>
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        value="{{ old('judul') }}">
                                    <small class="text-secondary">Note : Masukkan judul dari fideo youtube anda</small>
                                </div>
                                <div class="mb-3">
                                    <label for="tglup" class="form-label">Tanggal Upload</label>
                                    <input type="text" class="form-control" id="tglup" name="tglup" readonly>
                                    <small class="text-secondary">Note : otomatis diisi sesuai waktu pembuatan</small>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>
                        </div>
                    </div> --}}
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var today = new Date();
                            var formatter = new Intl.DateTimeFormat('id-ID', {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            });
                            var formattedDate = formatter.format(today);
                            document.getElementById('tglup').value = formattedDate;
                        });
                    </script>


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#gambar").change(function() {
                                readURL(this);
                            });
                            var currentDate = new Date();
                            var day = currentDate.getDate();
                            var month = currentDate.getMonth();
                            var year = currentDate.getFullYear();
                            var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
                                "September", "Oktober", "November", "Desember"
                            ];
                            day = day < 10 ? '0' + day : day;
                            var formattedDate = day + ' ' + monthNames[month] + ' ' + year;
                            $('#tgl').val(formattedDate);
                        });

                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $('#preview').attr('src', e.target.result).show();
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
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
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Tags</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Ditulis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($artikel as $key => $article)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/' . $article->banner) }}" alt="Gambar"
                                                        style="max-width: 100px;">
                                                </td>
                                                <td>
                                                    @php
                                                        $tags = json_decode($article->category_id, true);
                                                    @endphp

                                                    @if (is_array($tags))
                                                        @foreach ($tags as $tag)
                                                            <span class="badge"
                                                                style="background-color: #028E83; color: white; font-size: 12px;">
                                                                {{ $tag['value'] }}
                                                            </span>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $article->user->name }}</td>

                                                <td>{{ $article->tgl }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a class="btn btn-sm bg-success-light" data-bs-toggle="modal"
                                                            href="#edit_specialities_details">
                                                            <i class="fe fe-pencil"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-sm bg-danger-light delete-article"
                                                            data-id="{{ $article->id }}">
                                                            <i class="fe fe-trash"></i> Delete
                                                        </a>

                                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('.delete-article').click(function(e) {
                                                                    e.preventDefault();
                                                                    var articleId = $(this).data('id');
                                                                    if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
                                                                        $.ajax({
                                                                            type: 'POST',
                                                                            url: "{{ route('artikel_destroy', ['id' => ':id']) }}".replace(':id',
                                                                                articleId),
                                                                            data: {
                                                                                '_token': '{{ csrf_token() }}',
                                                                                '_method': 'DELETE'
                                                                            },
                                                                            success: function(response) {
                                                                                location.reload();
                                                                            },
                                                                            error: function(xhr, status, error) {
                                                                                console.error(error);
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>


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
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Link Video Youtube</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('artikelYt_store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="isiyt" class="form-label">Masukkan link Youtube</label>
                                    <input type="text" class="form-control" id="isiyt" name="isiyt"
                                        value="{{ old('isiyt') }}">
                                    <small class="text-secondary">Note : Masukkan link youtube anda</small>
                                </div>
                                <div class="mb-3">
                                    <label for="titleYt" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="titleYt" name="titleYt"
                                        value="{{ old('titleYt') }}">
                                    <small class="text-secondary">Note : Masukkan judul dari Video youtube anda</small>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Tags / Kategori Artikel</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        value="{{ old('category') }}">
                                    <small class="text-secondary">Note : Isi Dengan Kategori atau Tags</small>
                                </div>

                                <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                                <link rel="stylesheet"
                                    href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var input = document.querySelector('input[name=category]');

                                        new Tagify(input, {
                                            whitelist: [],
                                            dropdown: {
                                                enabled: 1,
                                                maxItems: 5
                                            }
                                        });
                                    });
                                </script>

                                <div class="mb-3">
                                    <label for="tglup" class="form-label">Tanggal Upload</label>
                                    <input type="text" class="form-control" id="tglup" name="tglup" readonly>
                                    <small class="text-secondary">Note: otomatis diisi sesuai waktu pembuatan</small>
                                </div>
                                <script>
                                    var tglUpload = document.getElementById('tglup');
                                    tglUpload.value = new Date().toISOString().slice(0, 10);
                                </script>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #028E83;">Simpan</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->

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
                                            <th>Judul</th>
                                            <th>Tags</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Ditulis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($artikelYt as $key => $article)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $article->titleYt }}</td>

                                                <td>
                                                    @php
                                                        $tags = json_decode($article->category, true);
                                                    @endphp

                                                    @if (is_array($tags))
                                                        @foreach ($tags as $tag)
                                                            <span class="badge"
                                                                style="background-color: #028E83; color: white; font-size: 12px;">
                                                                {{ $tag['value'] }}
                                                            </span>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $article->user->name }}</td>

                                                <td>{{ $article->tglup }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a class="btn btn-sm bg-success-light" data-bs-toggle="modal"
                                                            href="#edit_specialities_details">
                                                            <i class="fe fe-pencil"></i> Edit
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-sm bg-danger-light delete-article"
                                                            data-id="{{ $article->id }}">
                                                            <i class="fe fe-trash"></i> Delete
                                                        </a>

                                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('.delete-article').click(function(e) {
                                                                    e.preventDefault();
                                                                    var articleId = $(this).data('id');
                                                                    if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
                                                                        $.ajax({
                                                                            type: 'POST',
                                                                            url: "{{ route('artikel_destroy', ['id' => ':id']) }}".replace(':id',
                                                                                articleId),
                                                                            data: {
                                                                                '_token': '{{ csrf_token() }}',
                                                                                '_method': 'POST'
                                                                            },
                                                                            success: function(response) {

                                                                                location.reload();
                                                                            },
                                                                            error: function(xhr, status, error) {
                                                                                console.error(error);
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>


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
    @endsection
