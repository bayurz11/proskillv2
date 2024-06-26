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
        @include('admin.modal.edit_heroSection')

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
                                        <th>link</th>
                                        <th>banner</th>
                                        <th>Tanggal Rilis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($heroSections as $heroSection)
                                        <tr>
                                            <td>{!! nl2br(substr($heroSection->tagline, 0, 20)) !!} @if (strlen($heroSection->tagline) > 40)
                                                    ...
                                                @endif</td>
                                            <td>{!! nl2br(substr($heroSection->promosi, 0, 20)) !!} @if (strlen($heroSection->promosi) > 40)
                                                    ...
                                                @endif</td>
                                            <td>{{ $heroSection->link }}</td>
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
