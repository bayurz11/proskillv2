@section('title', 'ProSkill Akademia | Dashboard Halaman Beranda')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelas Tatap Muka Setting</li>
            </ol>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('KelasOfflineStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah kelas Tatap Muka</h5>
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
                                <label class="form-label" for="gambar">Gambar Slider</label>
                                <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                            </div>
                            <img id="preview" src="#" alt="Preview banner"
                                style="max-width: 100%; max-height: 200px; display: none;">
                            <div class="mb-3">
                                <label for="lvl" class="form-label">Level kelas</label>
                                <input type="text" class="form-control" id="lvl" name="lvl"
                                    placeholder="masukkan Level Kelas anda">
                            </div>
                            <div class="mb-3">
                                <label for="durasi" class="form-label">Durasi Kelas</label>
                                <input type="text" class="form-control" id="durasi" name="durasi"
                                    placeholder="Masukkan durasi kelas anda">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                                <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa"
                                    placeholder="Masukkan jumlahsiswa kelas anda">
                            </div>
                            <div class="mb-3">
                                <label for="sertifikat" class="form-label">Sertifikat</label>
                                <input type="text" class="form-control" id="sertifikat" name="sertifikat"
                                    placeholder="Apakah Mendapatkan Sertifikat?">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" min="0"
                                    placeholder="0">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                    placeholder="Masukkan deskripsi kesal anda">
                            </div>
                            <div class="mb-3">
                                <label for="instruktur" class="form-label">Instruktur</label>
                                <input type="text" class="form-control" id="instruktur" name="instruktur"
                                    placeholder="Masukkan instruktur kesal anda">
                            </div>
                            <div class="mb-3">
                                <label for="fasilitas" class="form-label">Fasilitas dan Materi</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas">
                                <small class="text-secondary">Note : Isi Dengan Fasilitas dan Materi kemudian klik
                                    Enter</small>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var input = document.querySelector('input[name=fasilitas]');

                                    new Tagify(input, {
                                        whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                        dropdown: {
                                            enabled: 1,
                                            maxItems: 20
                                        }
                                    });
                                });
                            </script>
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Ditulis</label>
                                <input type="text" class="form-control" id="tgl" placeholder="tgl"
                                    name="tgl" readonly>
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
                        <h6 class="card-title">Kelas Tatap Muka</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Kelas Tatap Muka
                        </button>
                        <p class="text-muted mb-3">Jumlah Kelas Online : {{ $kelasOffline->count() }}</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Banner Kelas</th>
                                        <th>level</th>
                                        <th>durasi</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelasOffline as $key => $kelasOffline)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kelasOffline->kelas }}</td>
                                            <td><img src="{{ asset('public/uploads/' . $kelasOffline->banner) }}"
                                                    alt="Banner" class="wd-100 wd-sm-150 me-3"></td>
                                            <td>{{ $kelasOffline->lvl }}</td>
                                            <td>{{ $kelasOffline->durasi }}</td>
                                            <td>{{ $kelasOffline->durasi }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon" title="Edit">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapus('{{ $kelasOffline->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    function hapus(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus Kelas ini?')) {
                                                            fetch(`/KelasOfflineDestroy/${id}`, {
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
                                                                    console.error('Gagal menghapus Kelas Tatap Muka');
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
