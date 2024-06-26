@section('title', 'ProSkill Akademia | Dashboard Sertifikat')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sertifikat</li>
            </ol>
        </nav>

        {{-- @include('admin.modal.add_link') --}}
        @include('admin.modal.add_sertifikat')
        @include('admin.modal.edit_sertifikat')



        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"> Sertifikat</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah Sertifikat
                        </button>
                        <p class="text-muted mb-3">Jumlah Sertifikat : {{ $sertifikat->count() }} </p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Sertifikat</th>
                                        <th>nama</th>
                                        <th>Gambar</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sertifikat as $key => $sertifikate)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $sertifikate->sertifikat_id }}</td>
                                            <td>{{ $sertifikate->sertifikat_name }}</td>
                                            <td><img src="{{ asset('public/uploads/' . $sertifikate->img) }}" alt="Banner"
                                                    class="wd-100 wd-sm-150 me-3"></td>
                                             <td>{{ $sertifikate->keterangan }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-icon edit-button"
                                                    title="Edit" data-bs-toggle="modal" data-bs-target="#editModal"
                                                    data-id="{{ $sertifikate->id }}">
                                                    <i data-feather="edit"></i>
                                                </button>

                                                <button onclick="hapuslink('{{ $sertifikate->id }}')"
                                                    class="btn btn-danger btn-icon" title="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>

                                                <script>
                                                    function hapuslink(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus ini?')) {
                                                            fetch(`/sertifikat_destroy/${id}`, {
                                                                method: 'DELETE',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                                }
                                                            }).then(response => {
                                                                if (response.ok) {
                                                                    console.log('Sertifikat berhasil dihapus. Mengalihkan ke halaman pengaturan link.');
                                                                    // Jika penghapusan berhasil, kembali ke halaman /link_setting
                                                                    window.location.href = '{{ route('sertifikat') }}';
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
                                                <a href="{{ route('cetak_sertifikat', ['id' => $sertifikate->id]) }}"
                                                    class="btn btn-warning btn-icon" title="print" target="_blank">
                                                    <i data-feather="printer"></i>
                                                </a>

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
