<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $subtitle; ?> Cuti</h1>
    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead style="text-align: center;">
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($staff)) : ?>
                            <?php $no = 1; ?>
                            <?php if (is_array($staff)) : ?>
                                <?php foreach ($staff as $user) : ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no++; ?></td>
                                        <td><?= $user->name; ?></td>
                                        <td><?= $user->email; ?></td>
                                        <td><?= $user->role; ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?= base_url('admin/detailstaff/' . $user->id_user); ?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-user"></i> Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                            <?php endif; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data user</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>