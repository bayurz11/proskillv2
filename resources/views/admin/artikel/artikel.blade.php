@section('title', 'ProSkill Akademia | Dashboard Artikel')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Artikel</li>
            </ol>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('artikel_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Masukkan Judul Artikel">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Benner/Gambar</label>
                                <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                                <small class="text-secondary">Note : Unggah gambar untuk Artikel yang akan
                                    ditulis</small>
                            </div>
                            <img id="preview" src="#" alt="Preview Gambar"
                                style="max-width: 100%; max-height: 200px; display: none;">

                            <div class="mb-3">
                                <label class="form-label" for="easyMdeExample">Isi Artikel</label>
                                <textarea class="form-control" name="content" id="easyMdeExample" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Kategori Artikel</label>
                                <input type="text" class="form-control" id="category" name="category">
                                <small class="text-secondary">Note : Isi Dengan Kategori atau Tags</small>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var input = document.querySelector('input[name=category]');

                                    new Tagify(input, {
                                        whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                        dropdown: {
                                            enabled: 1,
                                            maxItems: 5
                                        }
                                    });
                                });
                            </script>
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Ditulis</label>
                                <input type="text" class="form-control" id="tgl" placeholder="tgl" name="tgl"
                                    readonly>
                            </div>

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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tabel Artikel</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah Artikel
                        </button>
                        <p class="text-muted mb-3">Jumlah Artikel :</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Penulis Artikel</th>
                                        <th>Judul Artikel</th>
                                        <th>isi Artikel</th>
                                        <th>Tanggal Rilis</th>
                                        <th>Tag Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artikel as $key => $article)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $article->user->name }}</td>
                                            <td>{{ $article->title }}</td>
                                            {!! nl2br(substr($article->content, 0, 250)) !!} @if (strlen($article->content) > 250)
                                                ...
                                            @endif

                                            <td>{{ $article->tgl }}</td>
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

                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon" title="Edit">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapusArtikel('{{ $article->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    function hapusArtikel(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
                                                            fetch(`/artikel_destroy/${id}`, {
                                                                method: 'DELETE',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                                }
                                                            }).then(response => {
                                                                if (response.ok) {
                                                                    // Jika penghapusan berhasil, refresh halaman
                                                                    window.location.reload();
                                                                } else {
                                                                    // Tangani kesalahan jika terjadi
                                                                    console.error('Gagal menghapus artikel');
                                                                }
                                                            }).catch(error => {
                                                                console.error('Terjadi kesalahan:', error);
                                                            });
                                                        }
                                                    }
                                                </script>
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
