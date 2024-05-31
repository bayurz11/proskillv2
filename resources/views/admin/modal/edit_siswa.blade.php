<!-- Button to trigger modal (add this where you need the edit button) -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal"
    onclick="editSiswa({{ $siswa->id }})">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="siswaForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Using PUT method for update -->
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_edit" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_edit" name="nama_edit">
                    </div>
                    <div class="mb-3">
                        <label for="gender_edit" class="form-label">Gender</label>
                        <select class="form-control" id="gender_edit" name="gender_edit">
                            <option value="">Pilih Gender</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                            <option value="prefer_not_to_say">Tidak ingin menyebutkan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="umur_edit" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur_edit" name="umur_edit">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir_edit" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir_edit" name="tempat_lahir_edit">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir_edit" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir_edit" name="tgl_lahir_edit">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan_edit" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan_edit" name="pekerjaan_edit">
                    </div>
                    <div class="mb-3">
                        <label for="wali_ortu_edit" class="form-label">Nama Wali/Orang Tua</label>
                        <input type="text" class="form-control" id="wali_ortu_edit" name="wali_ortu_edit">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp_edit" class="form-label">No Hp Wali/Orang Tua</label>
                        <input type="text" class="form-control" id="no_hp_edit" name="no_hp_edit">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_edit" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat_edit" name="alamat_edit">
                    </div>
                    <div class="mb-3">
                        <label for="kelas_edit" class="form-label">Kelas</label>
                        <select class="form-control" id="kelas_edit" name="kelas_edit">
                            <option value="">Pilih kelas</option>
                            <option value="Fundamental Computer Skill">FCS</option>
                            <option value="Mahir Aplikasi Office Tingkat Advance">MOA</option>
                            <option value="Digital Design Menggunakan Canva Dan Figma">DGCF</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hari_edit" class="form-label">Hari</label>
                        <select class="form-control" id="hari_edit" name="hari_edit" onchange="updateWaktuKursus()">
                            <option value="">Pilih Hari</option>
                            <option value="Senin & Rabu">Senin & Rabu</option>
                            <option value="Selasa & Kamis">Selasa & Kamis</option>
                            <option value="Jumat & Sabtu">Jumat & Sabtu</option>
                        </select>
                    </div>
                    <div class="mb-3" id="waktuKursusContainer" style="display: none;">
                        <label for="waktu_kursus_edit" class="form-label">Waktu Kursus</label>
                        <select class="form-control" id="waktu_kursus_edit" name="waktu_kursus_edit">
                            <option value="">Pilih Waktu Kursus</option>
                        </select>
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
    function updateWaktuKursus() {
        var hari = document.getElementById("hari").value;
        var waktuKursusContainer = document.getElementById("waktuKursusContainer");
        var waktuKursusSelect = document.getElementById("waktu_kursus");
        waktuKursusSelect.innerHTML = '<option value="">Pilih Waktu Kursus</option>';

        if (hari) {
            waktuKursusContainer.style.display = "block";
            var options;

            if (hari === "Jumat & Sabtu") {
                options = [{
                        value: "08.45-10.15",
                        text: "08.45-10.15"
                    },
                    {
                        value: "10.30-12.00",
                        text: "10.30-12.00"
                    },
                    {
                        value: "13.00-15.00",
                        text: "13.00-15.00"
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

    function editSiswa(id) {
        // Example route, you may need to adjust according to your setup
        var route = `/siswa/${id}/edit`;

        fetch(route)
            .then(response => response.json())
            .then(data => {
                // Populate the form with the fetched data
                document.getElementById('siswaForm').action = `/siswa/${id}`;
                document.getElementById('sertifikat_name_edit').value = data.sertifikat_name;
                document.getElementById('gender_edit').value = data.gender;
                document.getElementById('umur_edit').value = data.umur;
                document.getElementById('tempat_lahir_edit').value = data.tempat_lahir;
                document.getElementById('tgl_lahir_edit').value = data.tgl_lahir;
                document.getElementById('pekerjaan_edit').value = data.pekerjaan;
                document.getElementById('wali_ortu_edit').value = data.wali_ortu;
                document.getElementById('no_hp_edit').value = data.no_hp;
                document.getElementById('alamat_edit').value = data.alamat;
                document.getElementById('kelas_edit').value = data.kelas;
                document.getElementById('hari_edit').value = data.hari;
                updateWaktuKursus();
                document.getElementById('waktu_kursus_edit').value = data.waktu_kursus;

                // Show the modal
                var editModal = new bootstrap.Modal(document.getElementById('editModal'));
                editModal.show();
            })
            .catch(error => console.error('Error fetching siswa data:', error));
    }
</script>
