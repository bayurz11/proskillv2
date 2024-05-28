@section('title', 'ProSkill Akademia | Dashboard Contoh Sertifikat')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contoh Sertifikat</li>
            </ol>
        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('ContohSertifikatStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambahkan sertifikat </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="gambar" class="form-label">Sertifikat/Gambar</label>
                                <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                                <small class="text-secondary">Note : Unggah gambar untuk contoh sertifikat</small>
                            </div>
                            <img id="preview" src="#" alt="Preview Gambar"
                                style="max-width: 100%; max-height: 200px; display: none;">


                            <div class="mb-3">
                                <label for="nama_sertifikat" class="form-label">Nama Kelas Sertifikat</label>
                                <input type="text" class="form-control" id="nama_sertifikat" name="nama_sertifikat">
                            </div>


                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Di Upload</label>
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
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Contoh Sertifikat</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah
                        </button>
                        <p class="text-muted mb-3">Jumlah : {{ $contohsertifikat->count() }}</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>tgl</th>
                                        <th>Nana Sertifikat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contohsertifikat as $key => $contoh)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td> {{ $contoh->nama_sertifikat }}
                                            </td>
                                            <td> {{ $contoh->tgl }}
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon" title="Edit">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapus('{{ $contoh->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    fetch(`/ContohSertifikatDestroy/${id}`, {
                                                            method: 'DELETE',
                                                            headers: {
                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                'Content-Type': 'application/json'
                                                            }
                                                        })
                                                        .then(response => {
                                                            if (response.ok) {
                                                                // Jika penghapusan berhasil, refresh halaman
                                                                window.location.reload();
                                                            } else {
                                                                // Tangani kesalahan jika terjadi
                                                                console.error('Gagal menghapus');
                                                            }
                                                        })
                                                        .catch(error => {
                                                            console.error('Terjadi kesalahan:', error);
                                                        });
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
