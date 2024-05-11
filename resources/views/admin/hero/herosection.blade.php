@section('title', 'ProSkill Akademia | Dashboard Halaman Beranda')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hero Section</li>
            </ol>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('HeroSectionStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Hero</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="tagline" class="form-label">Tagline</label>
                                <input type="text" class="form-control" id="tagline" name="tagline"
                                    placeholder="Masukkan tagline Anda">
                            </div>
                            <div class="mb-3">
                                <label for="promosi" class="form-label">Promosi</label>
                                <input type="text" class="form-control" id="promosi" name="promosi"
                                    placeholder="Masukkan promosi Anda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="banner">Gambar Slider</label>
                                <input type="file" accept="image/*" class="form-control" id="banner" name="banner">
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
                $("#banner").change(function() {
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
                        <h6 class="card-title">Hero Section</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Hero Section
                        </button>
                        <p class="text-muted mb-3">Jumlah Hero Section :</p>
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
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
