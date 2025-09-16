<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle; ?></h1>

    <div class="row">
        <!-- Card kiri: foto -->
        <div class="col-auto mb-3">
            <div class="card text-center p-3 h-100">
                <img src="<?= base_url('assets/img/profile/foto.jpeg'); ?>"
                    class="img-fluid rounded mb-3"
                    alt="Foto Profil"
                    style="max-width:200px;">
                <h5 class="font-weight-bold"><?= $user['name']; ?></h5>
            </div>
        </div>

        <!-- Card kanan: detail -->
        <div class="col-10 mb-3">
            <div class="card p-3 h-100">
                <table class="table table-borderless mb-3">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: <?= $user['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: novianasmrt@ugm.ac.id</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>: 085877180502</td>
                    </tr>
                    <tr>
                        <th>Kode Resmi (NIP/NIKA/NIU/NPU)</th>
                        <td>: 196907142007012001</td>
                    </tr>
                    <tr>
                        <th>Jenis Pegawai</th>
                        <td>: Kontrak</td>
                    </tr>
                    <tr>
                        <th>Kategori Pegawai</th>
                        <td>: Tenaga Kependidikan</td>
                    </tr>
                    <tr>
                        <th>Tipe Pegawai</th>
                        <td>: Non PNS</td>
                    </tr>
                    <tr>
                        <th>Jenis SK Pegawai</th>
                        <td>: SK UGM</td>
                    </tr>
                    <tr>
                        <th>Unit Kerja</th>
                        <td>: Direktorat Teknologi Informasi</td>
                    </tr>
                    <tr>
                        <th>Pangkat/Golongan/TMT. Terakhir</th>
                        <td>: (Gol. III/a-Penata Muda) TMT. 01-10-2023</td>
                    </tr>
                </table>
                <a href="<?= base_url('admin/editprofile/'); ?>" class="btn btn-info btn-sm">Edit</a>
            </div>
        </div>
    </div>
</div>
</div>