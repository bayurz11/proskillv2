<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-id" name="id">
                    <div class="mb-3">
                        <label for="link" class="form-label">Link Video</label>
                        <input type="text" class="form-control" id="link" name="link" value="">
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
                fetch(`/data/${id}/edit`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('edit-id').value = data.id;
                        document.getElementById('link').value = data
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
