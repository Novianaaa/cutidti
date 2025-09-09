<div id="content-wrapper" class="d-flex flex-column min-vh-100">
    <!-- Main Content -->
    <div id="content" class="flex-grow-1">
        <div class="container-fluid">

            <div class="row">
                <!-- Foto Profil -->
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('assets/img/profile/foto.jpeg'); ?>"
                        class="img-fluid rounded mb-3 shadow"
                        alt="Foto Profil"
                        style="max-width:200px;">
                    <h5 class="font-weight-bold"><?= $user['name']; ?></h5>
                </div>

                <!-- Detail Profil -->
                <div class="col-md-9">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <table class="table table-borderless table-sm mb-0">
                                <tr>
                                    <th width="200">Pegawai ID</th>
                                    <td>: 200200200200</td>
                                    <!-- <td>: <?= $user['pegawai_id']; ?></td> -->
                                </tr>
                                <tr>
                                    <th>Kode Resmi (NIP/NIKA/NIU/NPU)</th>
                                    <td>-</td>
                                    <!-- <td>: <?= $user['kode_resmi']; ?></td> -->
                                </tr>
                                <tr>
                                    <th>Jenis Pegawai</th>
                                    <td>-</td>
                                    <!-- <td>: <?= $user['jenis_pegawai']; ?></td> -->
                                </tr>
                                <tr>
                                    <th>Kategori Pegawai</th>
                                    <td>-</td>
                                    <!-- <td>: <?= $user['kategori_pegawai']; ?></td> -->
                                </tr>
                                <tr>
                                    <th>Tipe Pegawai</th>
                                    <td>-</td>
                                    <!-- <td>: <?= $user['tipe_pegawai']; ?></td> -->
                                </tr>
                                <tr>
                                    <th>Jenis SK Pegawai</th>
                                    <td>-</td>
                                    <!-- <td>: <?= $user['jenis_sk']; ?></td> -->
                                </tr>
                                <tr>
                                    <th>Unit Kerja</th>
                                    <td>-</td>
                                    <!-- <td>: <?= $user['unit_kerja']; ?></td> -->
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div>