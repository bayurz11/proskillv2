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
        //---Event Update Modal---//

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
                                                    data-bs-toggle="modal" data-bs-target="#updateModal"
                                                    onclick="loadEventData({{ $event->id }})">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <script>
                                                    function loadEventData(eventId) {
                                                        // Make an AJAX request to fetch event data by eventId
                                                        $.ajax({
                                                            url: '/event/' + eventId, // Ensure you have a route to fetch event data
                                                            type: 'GET',
                                                            success: function(data) {
                                                                // Populate the form fields with the fetched data
                                                                $('#name_event').val(data.name_event);
                                                                $('#lokasi').val(data.lokasi);
                                                                $('#mulai').val(data.mulai);
                                                                $('#durasi').val(data.durasi);
                                                                $('#tlp').val(data.tlp);
                                                                $('#email').val(data.email);
                                                                $('#deskripsi').val(data.deskripsi);
                                                                $('#syarat').val(data.syarat);
                                                                $('#tgl').val(data.tgl);

                                                                // If there's an existing image, show it
                                                                if (data.banner) {
                                                                    $('#preview').attr('src', '/uploads/' + data.banner).show();
                                                                } else {
                                                                    $('#preview').hide();
                                                                }

                                                                // Set the form action to the update route
                                                                $('form').attr('action', '/event_update/' + eventId);
                                                            },
                                                            error: function(err) {
                                                                console.error('Error fetching event data:', err);
                                                            }
                                                        });
                                                    }
                                                </script>

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
