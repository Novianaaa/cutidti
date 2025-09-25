<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Form Approval</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('cuti/approval_save/' . $pengajuan->id); ?>" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($pengajuan->nama); ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input type="text" class="form-control" value="<?= htmlspecialchars($pengajuan->tgl_pengajuan); ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" readonly><?= htmlspecialchars($pengajuan->keterangan); ?></textarea>
                </div>

                <div class="form-group">
                    <label>Status Persetujuan</label>
                    <select name="status" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Perubahan">Perubahan</option>
                        <option value="Ditangguhkan">Ditangguhkan</option>
                        <option value="Tidak Disetujui">Tidak Disetujui</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Keterangan Approval</label>
                    <textarea name="ket_approval" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
                <a href="<?= base_url('cuti/approval'); ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</div>