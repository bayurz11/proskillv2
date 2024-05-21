@section('title', 'ProSkill Akademia | Dashboard event')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Link</li>
            </ol>
        </nav>

        @include('admin.modal.add_link')

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit link</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="edit-id" name="id">
                            <div class="mb-3">
                                <label for="link" class="form-label">Link Video</label>
                                <input type="text" class="form-control" id="link_edit" name="link" value="">
                            </div>
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
                        const id = this.getAttribute('data-id');
                        fetch(`/data/${id}/edit`)
                            .then(response => response.json())
                            .then(data => {
                                document.getElementById('edit-id').value = data.id;
                                document.getElementById('link_edit').value = data
                                    .link; // Set nilai input sesuai dengan data.link
                                document.getElementById('editForm').action = `/data/${data.id}`;
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
                        <h6 class="card-title"> link</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah link
                        </button>
                        <p class="text-muted mb-3">Jumlah Foto : {{ $link->count() }}</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Link</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($link as $key => $link)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $link->link }}</td>

                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon edit-button"
                                                    title="Edit" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    data-id="{{ $link->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapuslink('{{ $link->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    function hapuslink(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus link ini?')) {
                                                            fetch(`/link_destroy/${id}`, {
                                                                method: 'DELETE',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                                }
                                                            }).then(response => {
                                                                if (response.ok) {
                                                                    console.log('Link berhasil dihapus. Mengalihkan ke halaman pengaturan link.');
                                                                    // Jika penghapusan berhasil, kembali ke halaman /link_setting
                                                                    window.location.href = '{{ route('link_setting') }}';
                                                                } else {
                                                                    // Tangani kesalahan jika terjadi
                                                                    response.text().then(text => {
                                                                        console.error('Gagal menghapus link:', text);
                                                                    });
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
