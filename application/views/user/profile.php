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
                        <th>Full Name</th>
                        <td>Kenneth Valdez</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>fip@jukmuh.al</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>(239) 816-9029</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>(320) 380-4539</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Bay Area, San Francisco, CA</td>
                    </tr>
                </table>
                <button class="btn btn-info btn-sm">Edit</button>
            </div>
        </div>
    </div>
</div>
</div>