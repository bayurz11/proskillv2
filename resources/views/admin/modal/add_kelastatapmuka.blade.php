<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('KelasOfflineStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah kelas Tatap Muka</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
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
                        <label for="fasilitas" class="form-label">Fasilitas</label>
                        <input type="text" class="form-control" id="fasilitas" name="fasilitas">
                        <small class="text-secondary">Note : Isi Dengan Fasilitas dan Materi kemudian klik
                            Enter</small>
                    </div>
                    <div class="mb-3">
                        <label for="materi" class="form-label">Materi</label>
                        <input type="text" class="form-control" id="materi" name="materi">
                    </div>
                    <div class="mb-3">
                        <label for="sub_materi" class="form-label">Sub Materi</label>
                        <input type="text" class="form-control" id="sub_materi" name="sub_materi">

                    </div>
                    {{-- <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" /> --}}

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var input = document.querySelector('input[name=sub_materi]');

                            new Tagify(input, {
                                whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                dropdown: {
                                    enabled: 1,
                                    maxItems: 100
                                }
                            });
                        });
                    </script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var input = document.querySelector('input[name=fasilitas]');

                            new Tagify(input, {
                                whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                dropdown: {
                                    enabled: 1,
                                    maxItems: 100
                                }
                            });
                        });
                    </script>
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Ditulis</label>
                        <input type="text" class="form-control" id="tgl" placeholder="tgl" name="tgl"
                            readonly>
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
