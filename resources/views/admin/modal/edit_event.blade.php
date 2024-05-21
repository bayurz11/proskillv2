<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModal">Update Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="name_event" class="form-label">Judul event</label>
                        <input type="text" class="form-control" id="name_event" name="name_event"
                            placeholder="Masukkan Nama event">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Benner/Gambar</label>
                        <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                        <small class="text-secondary">Note : Unggah gambar untuk event yang akan ditulis</small>
                    </div>
                    <img id="preview" src="#" alt="Preview Gambar"
                        style="max-width: 100%; max-height: 200px; display: none;">

                    {{-- <div class="mb-3">
                        <label for="pimpinan" class="form-label">Deskripsi</label>
                        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                        <textarea id="deskripsi" style="height: 800px; width: 200px; font-size: 18px;"></textarea>
                        <input type="hidden" id="deskripsi_update" name="deskripsi">
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#deskripsi'))
                                .then(editor => {
                                    editor.model.document.on('change:data', () => {
                                        const deskripsi_update = document.querySelector('#deskripsi_update');
                                        deskripsi_update.value = editor.getData();
                                    });
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div> --}}
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi Event</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="mulai" class="form-label">Mulai tanggal</label>
                        <input type="text" class="form-control" id="mulai" name="mulai">
                    </div>
                    <div class="mb-3">
                        <label for="durasi" class="form-label">Durasi Event</label>
                        <input type="text" class="form-control" id="durasi" name="durasi">
                    </div>
                    <div class="mb-3">
                        <label for="tlp" class="form-label">Kontak Event</label>
                        <input type="text" class="form-control" id="tlp" name="tlp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Event</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="syarat" class="form-label">Syarat Event</label>
                        <input type="text" class="form-control" id="syarat" name="syarat">
                        <small class="text-secondary">Note : Isi Dengan Kategori atau Tags</small>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.min.js"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var input = document.querySelector('input[name=syarat]');

                            new Tagify(input, {
                                whitelist: [], // Tambahkan kata kunci yang diperbolehkan jika perlu
                                dropdown: {
                                    enabled: 1,
                                    maxItems: 5
                                }
                            });
                        });
                    </script>

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
