@section('title', 'ProSkill Akademia | Dashboard INVENTARIS')
@extends('layout.mainlayout_admin')
@section('content')


    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori Barang</li>
            </ol>
        </nav>
        @include('admin.modal.add_kategori')


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Daftar Kategori Barang</h6>

                        <button type="button" class="btn btn-outline-primary position-absolute top-0 end-0 mt-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="btn-icon-prepend"
                                data-feather="plus-circle"></i>
                            Tambah
                        </button>
                        <p class="text-muted mb-3">Jumlah : {{ $barang->count() }}</p>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori Barang</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($contohsertifikat as $key => $contoh)
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
                                                    function hapus(id) {
                                                        if (confirm('Apakah Anda yakin ingin menghapus  ini?')) {
                                                            fetch(`/ContohSertifikatDestroy/${id}`, {
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
                                    @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
