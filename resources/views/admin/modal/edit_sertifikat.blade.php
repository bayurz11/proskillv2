<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Sertifikat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-id" name="id">
                    <div class="mb-3">
                        <label for="sertifikat_name_edit" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="sertifikat_name_edit"
                            name="sertifikat_name_edit">
                    </div>
                     <div class="mb-3">
                        <label for="sertifikat_id_edit" class="form-label">ID Sertifikat </label>
                        <input type="text" class="form-control" id="sertifikat_id_edit" name="sertifikat_id_edit">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_edit" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan_edit"
                            name="keterangan_edit">
                    </div>

                    <div class="mb-3">
                        <label class="gambar" for="gambar">Sertifikat</label>
                        <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                    </div>
                    <img id="preview_edit" src="#" alt="Preview banner"
                        style="max-width: 100%; max-height: 200px; display: none;">
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Ditulis</label>
                        <input type="text" class="form-control" id="tgl_edit" placeholder="tgl" name="tgl_edit"
                            readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            fetch(`/srt/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    $('#edit-id').val(data.id);
                    $('#sertifikat_name_edit').val(data.sertifikat_name);
                    $('#sertifikat_id_edit').val(data.sertifikat_id);
                    $('#keterangan_edit').val(data.keterangan);
                    $('#tgl_edit').val(data.tgl);

                    // If there is an image, show it in the preview
                    if (data.gambar) {
                        $('#preview_edit').attr('src', `/path/to/images/${data.gambar}`).show();
                    } else {
                        $('#preview_edit').hide();
                    }

                    // Set the form action to the update route
                    $('#editForm').attr('action', `/srt/${data.id}`);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        });

        // Display the uploaded image preview
        $('#gambar').change(function() {
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
