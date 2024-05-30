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
                        <label for="sertifikat_name_edit" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="sertifikat_name_edit"
                            name="sertifikat_name_edit">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="gambar">Sertifikat</label>
                        <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                    </div>
                    <img id="preview" src="#" alt="Preview banner"
                        style="max-width: 100%; max-height: 200px; display: none;">
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Ditulis</label>
                        <input type="text" class="form-control" id="tgl" placeholder="tgl" name="tgl"
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
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-button');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                fetch(`/sertifikat/${id}/edit`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('edit-id').value = data.id;
                        document.getElementById('sertifikat_name_edit').value = data
                            .link; // Set nilai input sesuai dengan data.link
                        document.getElementById('editForm').action = `/data/${data.id}`;
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            });
        });
    });
</script>
