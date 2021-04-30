<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Anggota</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="anggota">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="anggota" placeholder="Masukkan Nama Lengkap">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Kelas">
                            <small class="form-text text-muted">Ex: XRPL2</small>
                        </div>
                        <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="text" name="telp" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telephone">
                            <small class="form-text text-muted">Ex: 111-222-3333</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>