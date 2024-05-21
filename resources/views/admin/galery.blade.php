@section('title', 'ProSkill Akademia | Dashboard event')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galery Event</li>
            </ol>
        </nav>
        @include('admin.modal.add_galery')

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Galery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <input type="hidden" id="edit-id" name="id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Benner/Gambar</label>
                                <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                                <small class="text-secondary">Note: Unggah gambar untuk event yang akan ditulis</small>
                            </div>
                            <img id="preview" src="#" alt="Preview Gambar"
                                style="max-width: 100%; max-height: 200px; display: none;">
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi Event</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="name_event" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="name_event" name="name_event">
                            </div>
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
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editButtons = document.querySelectorAll('.edit-button');
                editButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.getAttribute('galery-id');
                        fetch(`/galery/${id}/edit`)
                            .then(response => response.json())
                            .then(galery => {
                                document.getElementById('edit-id').value = galery.id;
                                document.getElementById('gambar').value = galery
                                    .link; // Set nilai input sesuai dengan data.link
                                document.getElementById('editForm').action = `/galery/${galery.id}`;
                            })
                            .catch(error => {
                                console.error('Error fetching data:', error);
                            });
                    });
                });
            });
        </script>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"> Galery Event</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah Event
                        </button>
                        <p class="text-muted mb-3">Jumlah Foto : {{ $galery->count() }}</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Lokasi</th>
                                        <th>Nama event</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galery as $key => $galery)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $galery->lokasi }}</td>
                                            <td>{{ $galery->name_event }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon edit-button"
                                                    title="Edit" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    data-id="{{ $galery->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapusgalery('{{ $galery->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    function hapusgalery(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus gambar ini?')) {
                                                            fetch(`/galery_destroy/${id}`, {
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
                                                                    console.error('Gagal menghapus gambar');
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
