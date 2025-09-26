<div class="container mt-4">
    <h3>Detail Riwayat Cuti</h3>
    <div class="card shadow mt-3">
        <div class="card-body">
            <form>
                <!-- <div class="mb-3">
                    <label>Jenis Cuti</label>
                    <input type="text" class="form-control" value="<?= $cuti->jenis_cuti; ?>" readonly>
                </div>
                <div class="mb-3"> -->
                <div class="mb-3">
                    <label>Jenis Cuti</label>
                    <input type="text" class="form-control" value="Jenis Cuti" readonly>
                </div>
                <div class="mb-3">
                    <label>Tanggal Pengajuan</label>
                    <input type="text" class="form-control" value="Tanggal Pengajuan" readonly>
                </div>
                <div class="mb-3">
                    <label>Tanggal Mulai</label>
                    <input type="text" class="form-control" value="Tanggal Mulai Cuti" readonly>
                </div>
                <div class="mb-3">
                    <label>Tanggal Selesai</label>
                    <input type="text" class="form-control" value="Tanggal Selesai Cuti" readonly>
                </div>
                <div class="mb-3">
                    <label>Tanggal Masuk</label>
                    <input type="text" class="form-control" value="Tanggal Masuk" readonly>
                </div>
                <div class="mb-3">
                    <label>Keterangan</label>
                    <textarea class="form-control" readonly>Keterangan</textarea>
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="text" class="form-control" value="Status" readonly>
                </div>

                <hr>
                <h5>Preview Dokumen</h5>
                <iframe src="filedokumen"
                    width="100%" height="500px"></iframe>

                <div class="mt-3">
                    <a href="File Dokumen"
                        target="_blank" class="btn btn-primary">
                        Buka Dokumen
                    </a>
                    <a href="<?= base_url('cuti/riwayat'); ?>" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>