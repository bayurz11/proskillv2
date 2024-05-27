<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Kategori Barang </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">



                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                    </div>

                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Di Upload</label>
                        <input type="text" class="form-control" id="tgl" placeholder="tgl" name="tgl"
                            readonly>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
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
