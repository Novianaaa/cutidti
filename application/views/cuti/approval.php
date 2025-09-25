<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Approval Cuti</h1>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan Cuti</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Mulai Cuti</th>
                            <th>Tanggal Masuk</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pengajuan as $p): ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $p->nama; ?></td>
                                <td><?= $p->tgl_pengajuan; ?></td>
                                <td><?= $p->tgl_mulai; ?></td>
                                <td><?= $p->tgl_masuk; ?></td>
                                <td><?= $p->keterangan; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('cuti/approvalform/' . $p->id); ?>" class="btn btn-info btn-sm">
                                        <i class="fas fa-check"></i> Approval
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (empty($pengajuan)): ?>
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data pengajuan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>