<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle; ?> Cuti</h1>
    <div class="container mt-4">
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">

            <!-- Form Pencarian -->
            <form action="<?= base_url('admin/datastaff'); ?>" method="get" class="form-inline">
                <input type="text" name="keyword" class="form-control form-control-sm mr-2"
                    placeholder="Cari staff..." value="<?= $this->input->get('keyword'); ?>">
                <button type="submit" class="btn btn-secondary btn-sm">
                    <i class="fas fa-search"></i> Cari
                </button>
            </form>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead style="text-align: center;">
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Mulai Cuti</th>
                            <th>Selesai Cuti</th>
                            <th>Tanggal Masuk</th>
                            <th>Keterangan</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 10%;">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($staff)) : ?>
                            <?php $no = 1; ?>
                            <?php foreach ($staff as $user) : ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td>Tanggal Pengajuan</td>
                                    <td>Tanggal Mulai Cuti</td>
                                    <td>Tanggal Selesai Cuti</td>
                                    <td>Tanggal Masuk</td>
                                    <td>Keterangan Cuti</td>
                                    <td>Status</td>
                                    <td style="text-align: center;">
                                        <a href="<?= base_url('admin/detailstaff/' . $user->id_user); ?>" class="btn btn-info btn-sm">
                                            <i class="fas fa-user"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data user</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>