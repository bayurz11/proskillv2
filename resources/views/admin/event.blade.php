@section('title', 'ProSkill Akademia | Dashboard event')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Event</li>
            </ol>
        </nav>
        @include('admin.modal.add_event')


        @include('admin.modal.edit_event')


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Event</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah Event
                        </button>
                        <p class="text-muted mb-3">Jumlah Event : {{ $event->count() }}</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Lokasi</th>
                                        <th>Nama event</th>
                                        <th>Mulai Event</th>
                                        <th>Durasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event as $key => $even)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $even->lokasi }}</td>
                                            <td>{{ $even->name_event }}</td>
                                            <td>{{ $even->mulai }}</td>
                                            <td>{{ $even->durasi }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon" title="Edit"
                                                    data-bs-toggle="modal" data-bs-target="#updateModal">
                                                    <i data-feather="edit"></i>
                                                </button>
                                                <button onclick="hapusevent('{{ $even->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>


                                                <script>
                                                    function hapusevent(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus event ini?')) {
                                                            fetch(`/event_destroy/${id}`, {
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
                                                                    console.error('Gagal menghapus event');
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
