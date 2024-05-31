<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('sertifikat_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sertifikat_name" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="sertifikat_name" name="sertifikat_name">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">Pilih Gender</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                            <option value="prefer_not_to_say">Tidak ingin menyebutkan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur </label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir </label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                    </div>
                    <div class="mb-3">
                        <label for="wali_ortu" class="form-label">Nama Wali/ Orang Tua</label>
                        <input type="text" class="form-control" id="wali_ortu" name="wali_ortu">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp Wali/ Orang Tua</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="">Pilih kelas</option>
                            <option value="Fundamental Computer
                            Skill">FCS</option>
                            <option value="Mahir Aplikasi Office
                            Tingkat Advance">MOA
                            </option>
                            <option value="Digital Design Menggunakan
                            Canva Dan Figma">DGCF
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <select class="form-control" id="hari" name="hari" onchange="updateWaktuKursus()">
                            <option value="">Pilih Hari</option>
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                        </select>
                    </div>

                    <div class="mb-3" id="waktuKursusContainer" style="display: none;">
                        <label for="waktu_kursus" class="form-label">Waktu Kursus</label>
                        <select class="form-control" id="waktu_kursus" name="waktu_kursus">
                            <option value="">Pilih Waktu Kursus</option>
                        </select>
                    </div>

                    <script>
                        function updateWaktuKursus() {
                            var hari = document.getElementById("hari").value;
                            var waktuKursusContainer = document.getElementById("waktuKursusContainer");
                            var waktuKursusSelect = document.getElementById("waktu_kursus");

                            // Reset options
                            waktuKursusSelect.innerHTML = '<option value="">Pilih Waktu Kursus</option>';

                            if (hari) {
                                waktuKursusContainer.style.display = "block";
                                var options;

                                if (hari === "jumat" || hari === "sabtu") {
                                    options = [{
                                            value: "08.45-10.15",
                                            text: "08.45-10.15"
                                        },
                                        {
                                            value: "10.30-12.00",
                                            text: "10.30-12.00"
                                        },
                                        {
                                            value: "13.00-14.30",
                                            text: "13.00-14.30"
                                        }
                                    ];
                                } else {
                                    options = [{
                                            value: "08.45-10.15",
                                            text: "08.45-10.15"
                                        },
                                        {
                                            value: "10.30-12.00",
                                            text: "10.30-12.00"
                                        },
                                        {
                                            value: "13.00-14.30",
                                            text: "13.00-14.30"
                                        },
                                        {
                                            value: "14.30-16.00",
                                            text: "14.30-16.00"
                                        },
                                        {
                                            value: "16.30-20.30",
                                            text: "16.30-20.30"
                                        }
                                    ];
                                }

                                options.forEach(function(option) {
                                    var opt = document.createElement('option');
                                    opt.value = option.value;
                                    opt.textContent = option.text;
                                    waktuKursusSelect.appendChild(opt);
                                });
                            } else {
                                waktuKursusContainer.style.display = "none";
                            }
                        }
                    </script>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
