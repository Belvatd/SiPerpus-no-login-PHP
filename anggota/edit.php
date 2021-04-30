<?php
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota 
        WHERE id_anggota = $id_anggota";

$res = mysqli_query($kon, $sql);

$anggota = mysqli_fetch_assoc($res);

if(isset($_POST['simpan']))
    {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $telp = $_POST['telp'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q_update = "UPDATE anggota SET nama = '$nama', 
                                     kelas = '$kelas',
                                     telp = '$telp',
                                     username = '$username',
                                     password = '$password',
                    WHERE id_anggota = $id_anggota";

        $hasil_update = mysqli_query($kon, $q_update);

        $cek = mysqli_affected_rows($kon);

    }

include '../aset/header.php'
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data Anggota</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="anggota">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="anggota" value="<?= $anggota['nama'] ?>">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $anggota['kelas'] ?>">
                            <small class="form-text text-muted">Ex: XRPL2</small>
                        </div>
                        <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="text" name="telp" class="form-control" id="exampleInputPassword1" value="<?= $anggota['telp'] ?>">
                            <small class="form-text text-muted">Ex: 111-222-3333</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $anggota['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="<?= $anggota['password'] ?>">
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