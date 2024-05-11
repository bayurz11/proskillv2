@section('title', 'ProSkill Akademia | Dashboard Halaman Beranda')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelas Online Setting</li>
            </ol>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('KelasOnlineStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah kelas Online</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas"
                                    placeholder="Masukkan nama kelas Anda">
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Level kelas</label>
                                <input type="text" class="form-control" id="level" name="level"
                                    placeholder="Pilih Level Kelas anda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="gambar">Gambar Slider</label>
                                <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                            </div>
                            <img id="preview" src="#" alt="Preview banner"
                                style="max-width: 100%; max-height: 200px; display: none;">
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Ditulis</label>
                                <input type="text" class="form-control" id="tgl" placeholder="tgl" name="tgl"
                                    readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
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



        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Kelas Online</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Kelas online
                        </button>
                        <p class="text-muted mb-3">Jumlah Kelas Online :</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Tagline</th>
                                        <th>promosi</th>
                                        <th>banner</th>
                                        <th>Tanggal Rilis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelasOnline as $kelasonline)
                                        <tr>
                                            <td>{{ $kelasonline->kelas }}</td>
                                            <td>{{ $kelasonline->level }}</td>
                                            <td><img src="{{ asset('public/uploads/' . $kelasonline->banner) }}"
                                                    alt="Banner" class="wd-100 wd-sm-150 me-3"></td>
                                            <td>{{ $kelasonline->tgl }}</td>
                                            <td>
                                                <!-- Tambahkan tombol untuk mengedit atau menghapus data -->
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
