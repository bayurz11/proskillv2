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
        @include('admin.modal.add_heroSection')
        {{-- @include('admin.modal.edit_heroSection') --}}

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Hero</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="edit-id" name="id">
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
                                <label class="form-label" for="gambar">Gambar Slider</label>
                                <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                            </div>
                            <img id="preview" src="#" alt="Preview banner"
                                style="max-width: 100%; max-height: 200px; display: none;">
                            <div class="mb-3">
                                <label for="tgl" class="form-label">Tanggal Ditulis</label>
                                <input type="text" class="form-control" id="tgl" name="tgl" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                // Fetch data when the edit button is clicked
                $('.edit-button').on('click', function() {
                    const id = $(this).data('id');
                    fetch(`/HeroSection/${id}/edit`)
                        .then(response => response.json())
                        .then(data => {
                            $('#edit-id').val(data.id);
                            $('#tagline').val(data.tagline);
                            $('#promosi').val(data.promosi);
                            $('#tgl').val(data.tgl);

                            // If there is an image, show it in the preview
                            if (data.gambar) {
                                $('#preview').attr('src', `/path/to/images/${data.gambar}`).show();
                            } else {
                                $('#preview').hide();
                            }

                            // Set the form action to the update route
                            $('#editForm').attr('action', `/galery/${data.id}`);
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                        });
                });

                // Display the uploaded image preview
                $('#gambar').change(function() {
                    readURL(this);
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

                // Set the current date to the date input
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
                        <p class="text-muted mb-3">Jumlah Hero Section : {{ $heroSections->count() }} </p>
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
                                    @foreach ($heroSections as $heroSection)
                                        <tr>
                                            <td>{{ $heroSection->tagline }}</td>
                                            <td>{{ $heroSection->promosi }}</td>
                                            <td><img src="{{ asset('public/uploads/' . $heroSection->banner) }}"
                                                    alt="Banner" class="wd-100 wd-sm-150 me-3"></td>
                                            <td>{{ $heroSection->tgl }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon edit-button"
                                                    title="Edit" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    data-id="{{ $heroSection->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapus('{{ $heroSection->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    function hapus(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus  ini?')) {
                                                            fetch(`/HeroSectionDestroy/${id}`, {
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
                                                                    console.error('Gagal menghapus ');
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
