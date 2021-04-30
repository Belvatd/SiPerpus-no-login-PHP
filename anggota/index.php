<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota
        ORDER BY nama";

$res = mysqli_query($kon, $sql);

$anggota = array();

while ($data = mysqli_fetch_assoc($res)){
    $anggota[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"> <i class="fas fa-users"></i> Data Anggota</h2>
        </div>
        <div class="card-body">
        <a class="btn btn-outline-secondary mb-2" href="tambah.php" role="button"><i class="fas fa-plus"></i> Tambah Anggota</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $no = 1;
                        foreach ($anggota as $p) { ?>
                            <tr>
                                <th scope="row"><?= $no?></th>
                                <td><?= $p['nama']?></th>
                                <td><?= $p['kelas']?></th>
                                <td>
                                    <a href="#" class="badge badge-success">Detail</a>
                                    <a href="edit.php?id_anggota=<?= $p['id_anggota']?>" class="badge badge-warning">Edit</a>
                                    <a href="hapus.php?id_anggota=<?= $p['id_anggota']?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>

                    <?php
                    $no++;
                        }
                    ?>
                </tbody>
        </table>
        </div>
    </div>
        </div>
    </div>
</div>


<?php
include '../aset/footer.php';
?>