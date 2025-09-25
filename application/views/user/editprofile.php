<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <!-- Card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('user/updateProfile'); ?>" method="post">
                <div class="form-group">
                    <label>Foto User</label><br>
                    <img src=<?= base_url('assets/img/profile/foto.jpeg'); ?> class="img-fluid rounded mb-3"
                        alt="Foto Profil"
                        style="max-width:200px;">
                    <input type="file" class="form-control-file" name="foto">
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="Nama Dummy">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="dummy@email.com">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" name="telepon" value="08123456789">
                </div>

                <div class="form-group">
                    <label>Kode Resmi NIU</label>
                    <input type="text" class="form-control" name="niu" value="123456">
                </div>

                <div class="form-group">
                    <label>Jenis Pegawai</label>
                    <select class="form-control" name="jenis_pegawai">
                        <option selected>Dosen</option>
                        <option>Tendik</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kategori Pegawai</label>
                    <input type="text" class="form-control" name="kategori" value="Tetap">
                </div>

                <div class="form-group">
                    <label>Tipe Pegawai</label>
                    <input type="text" class="form-control" name="tipe" value="PNS">
                </div>

                <div class="form-group">
                    <label>SK Pegawai</label>
                    <input type="text" class="form-control" name="sk" value="123/UGM/2023">
                </div>

                <div class="form-group">
                    <label>Unit Kerja</label>
                    <input type="text" class="form-control" name="unit" value="DTI">
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="Staff">
                </div>

                <div class="form-group">
                    <label>Pangkat / Golongan</label>
                    <input type="text" class="form-control" name="pangkat" value="IIIa">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>