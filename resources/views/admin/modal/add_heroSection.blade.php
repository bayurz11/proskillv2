  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form action="{{ route('HeroSectionStore') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Hero</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="tagline" class="form-label">Tagline</label>
                          <input type="text" class="form-control" id="tagline" name="tagline"
                              placeholder="Masukkan tagline Anda">
                      </div>
                      <div class="mb-3">
                          <label for="promosi" class="form-label">Promosi</label>
                          <input type="text" class="form-control" id="promosi" name="promosi"
                              placeholder="Masukkan promosi Anda">
                      </div>
                      <div class="mb-3">
                          <label for="link" class="form-label">Link</label>
                          <input type="text" class="form-control" id="link" name="link"
                              placeholder="Masukkan link Anda">
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="gambar">Gambar Slider</label>
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
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
          </div>
      </div>
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
