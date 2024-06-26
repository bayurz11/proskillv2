<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Hero</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-id" name="id">
                    <div class="mb-3">
                        <label for="tagline" class="form-label">Tagline</label>
                        <input type="text" class="form-control" id="tagline_edit" name="tagline"
                            placeholder="Masukkan tagline Anda">
                    </div>
                    <div class="mb-3">
                        <label for="promosi" class="form-label">Promosi</label>
                        <input type="text" class="form-control" id="promosi_edit" name="promosi"
                            placeholder="Masukkan promosi Anda">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link_edit" name="link"
                            placeholder="Masukkan link Anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="gambar_edit">Gambar Slider</label>
                        <input type="file" accept="image/*" class="form-control" id="gambar_edit" name="gambar">
                    </div>
                    <img id="preview_edit" src="#" alt="Preview banner"
                        style="max-width: 100%; max-height: 200px; display: none;">
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Ditulis</label>
                        <input type="text" class="form-control" id="tgl_edit" name="tgl" readonly>
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
            fetch(`/HeroSection/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    $('#edit-id').val(data.id);
                    $('#tagline_edit').val(data.tagline);
                    $('#promosi_edit').val(data.promosi);
                    $('#link_edit').val(data.link);
                    $('#tgl_edit').val(data.tgl);

                    // If there is an image, show it in the preview
                    if (data.gambar) {
                        $('#preview_edit').attr('src', `/path/to/images/${data.gambar}`).show();
                    } else {
                        $('#preview_edit').hide();
                    }

                    // Set the form action to the update route
                    $('#editForm').attr('action', `/HeroSection/${data.id}`);
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
