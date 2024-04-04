  <!-- Edit Details Modal -->
  <div class="modal fade" id="edit_Sertifikat" aria-hidden="true" role="dialog" data-bs-target="#edit_Sertifikat_modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Edit Sertifikat</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('sertifikat_update', ['id' => $sertifikate->id]) }}" method="POST"
                      enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                          <label for="gambar" class="form-label">Sertifikat</label>
                          <input type="file" accept="image/*" class="form-control" id="gambar" name="gambar">
                          <small class="text-secondary">Catatan: Unggah gambar untuk sertifikat yang akan diubah</small>
                      </div>
                      <img id="preview" src="{{ asset('uploads/' . $sertifikate->img) }}" alt="Preview Gambar"
                          style="max-width: 100%; max-height: 200px;">

                      <div class="mb-3">
                          <label for="sertifikat_name" class="form-label">Nama Sertifikat</label>
                          <input type="text" class="form-control" id="sertifikat_name" name="sertifikat_name"
                              value="{{ $sertifikate->sertifikat_name }}">
                          <small class="text-secondary">Catatan: Masukkan judul sertifikat yang akan diubah</small>
                      </div>

                      <button type="submit" class="btn btn-primary" style="background-color: #028E83;">Simpan
                          Perubahan</button>
                  </form>

              </div>
          </div>
      </div>
  </div>
  <!-- /Edit Details Modal -->
