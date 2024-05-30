<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Kelas Tatap Muka</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-id" name="id">
                    <div class="mb-3">
                        <label for="kelas_edit" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" id="kelas_edit" name="kelas_edit"
                            placeholder="Masukkan nama kelas Anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="gambar_edit">Gambar Slider</label>
                        <input type="file" accept="image/*" class="form-control" id="gambar_edit" name="gambar">
                    </div>
                    <img id="preview_edit" src="#" alt="Preview banner"
                        style="max-width: 100%; max-height: 200px; display: none;">
                    <div class="mb-3">
                        <label for="lvl_edit" class="form-label">Level Kelas</label>
                        <input type="text" class="form-control" id="lvl_edit" name="lvl_edit"
                            placeholder="masukkan Level Kelas anda">
                    </div>
                    <div class="mb-3">
                        <label for="durasi_edit" class="form-label">Durasi Kelas</label>
                        <input type="text" class="form-control" id="durasi_edit" name="durasi_edit"
                            placeholder="Masukkan durasi kelas anda">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_siswa_edit" class="form-label">Jumlah Siswa</label>
                        <input type="text" class="form-control" id="jumlah_siswa_edit" name="jumlah_siswa_edit"
                            placeholder="Masukkan jumlah siswa kelas anda">
                    </div>
                    <div class="mb-3">
                        <label for="sertifikat_edit" class="form-label">Sertifikat</label>
                        <input type="text" class="form-control" id="sertifikat_edit" name="sertifikat_edit"
                            placeholder="Apakah Mendapatkan Sertifikat?">
                    </div>
                    <div class="mb-3">
                        <label for="price_edit" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price_edit" name="price_edit" min="0"
                            placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_edit" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi_edit" name="deskripsi_edit"
                            placeholder="Masukkan deskripsi kelas anda">
                    </div>
                    <div class="mb-3">
                        <label for="instruktur_edit" class="form-label">Instruktur</label>
                        <input type="text" class="form-control" id="instruktur_edit" name="instruktur_edit"
                            placeholder="Masukkan instruktur kelas anda">
                    </div>
                    <div class="mb-3">
                        <label for="fasilitas_edit" class="form-label">Fasilitas dan Materi</label>
                        <input type="text" class="form-control" id="fasilitas_edit" name="fasilitas_edit">
                        <small class="text-secondary">Note: Isi Dengan Fasilitas dan Materi kemudian klik Enter</small>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var input = document.querySelector('input[name=fasilitas_edit]');

                            new Tagify(input, {
                                whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                dropdown: {
                                    enabled: 1,
                                    maxItems: 20
                                }
                            });
                        });
                    </script>
                    <div class="mb-3">
                        <label for="tgl_edit" class="form-label">Tanggal Ditulis</label>
                        <input type="text" class="form-control" id="tgl_edit" name="tgl_edit" readonly>
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
            fetch(`/kelasoffline/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    $('#edit-id').val(data.id);
                    $('#kelas_edit').val(data.kelas);
                    $('#lvl_edit').val(data.level);
                    $('#durasi_edit').val(data.durasi);
                    $('#jumlah_siswa_edit').val(data.jumlah_siswa);
                    $('#sertifikat_edit').val(data.sertifikat);
                    $('#price_edit').val(data.price);
                    $('#deskripsi_edit').val(data.deskripsi);
                    $('#instruktur_edit').val(data.instruktur);
                    $('#fasilitas_edit').val(data.fasilitas);
                    $('#tgl_edit').val(data.tgl);

                    // If there is an image, show it in the preview
                    if (data.gambar) {
                        $('#preview_edit').attr('src', `/path/to/images/${data.gambar}`).show();
                    } else {
                        $('#preview_edit').hide();
                    }

                    // Set the form action to the update route
                    $('#editForm').attr('action', `/kelasoffline/${data.id}`);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        });

        // Display the uploaded image preview
        $('#gambar_edit').change(function() {
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_edit').attr('src', e.target.result).show();
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
        $('#tgl_edit').val(formattedDate);
    });
</script>
