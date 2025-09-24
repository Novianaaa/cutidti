<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Formulir <?= $subtitle; ?> Cuti</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Cuti</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('cuti/simpan') ?>" method="post">

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label>Tanggal Input :</label>
                        <input type="date" name="tanggal_input" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Nama :</label>
                        <input type="text" name="no_induk" class="form-control" value="////" readonly>
                    </div>
                    <div class="col-md-3">
                        <label>NIU :</label>
                        <input type="text" name="nama" class="form-control" value="///" readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Alasan Cuti</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="cth: acara keluarga">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label>Jabatan :</label>
                        <input type="text" name="departemen" class="form-control" value="///" readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Pangkat / Gol :</label>
                        <input type="text" name="jabatan" class="form-control" value="///" readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Sisa Cuti Terakhir :</label>
                        <input type="text" name="sisa_akhir" class="form-control" value="///" readonly>
                    </div>
                    <div class="col-md-3">
                        <label>Jumlah Cuti Diambil :</label>
                        <input type="number" name="jumlah_cuti" class="form-control" value="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label>Tanggal Cuti 1 :</label>
                        <input type="date" name="tanggal_cuti1" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Tanggal Cuti 2 :</label>
                        <input type="date" name="tanggal_cuti2" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Tanggal Masuk :</label>
                        <input type="date" name="tanggal_masuk" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label>Alamat :</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat saat cuti">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>No Telp / HP :</label>
                        <input type="text" name="telepon" class="form-control" placeholder="Nomor HP">
                    </div>
                    <div class="col-md-6">
                        <label>Jenis Cuti :</label>
                        <div class="input-group" style="position: relative;">
                            <select name="jenis_cuti" class="form-control"
                                style="appearance: none; -webkit-appearance: none; -moz-appearance: none; padding-right: 30px; line-height: 1.5; height: calc(2.25rem + 2px);">
                                <option value="Cuti Tahunan">Cuti Tahunan</option>
                                <option value="Cuti Sakit">Cuti Sakit</option>
                                <option value="Cuti Sakit">Cuti Alasan Penting</option>
                                <option value="Cuti Sakit">Cuti Besar</option>
                                <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                <option value="Cuti Melahirkan">Cuti di Luar Tanggungan Negara</option>
                            </select>
                            <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none; color: #6c757d;">
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>