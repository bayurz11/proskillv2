<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Barang </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">


                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                        <small class="text-secondary">Note : Unggah gambar barang</small>
                    </div>
                    <img id="preview" src="#" alt="Preview Gambar"
                        style="max-width: 100%; max-height: 200px; display: none;">


                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Barang</label>
                        <select class="form-control" id="jenis_barang" name="jenis_barang">
                            <option value="" selected disabled>Pilih Jenis Barang</option>
                            <option value="elektronik">Elektronik</option>
                            <option value="pakaian">Pakaian</option>
                            <option value="makanan">Makanan</option>
                            <option value="perabotan">Perabotan</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Di Upload</label>
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
