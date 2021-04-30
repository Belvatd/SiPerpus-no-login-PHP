<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku
        ORDER BY buku.judul";

$res = mysqli_query($kon, $sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)){
    $buku[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"> <i class="fas fa-book"></i> Data Buku</h2>
        </div>
        <div class="card-body">
        <a class="btn btn-outline-info mb-2" href="tambah.php" role="button"> <i class="fas fa-plus"></i> Tambah Data Buku</a>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">pengarang</th>
                    <th scope="col">stok</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $no = 1;
                        foreach ($buku as $p) { ?>
                            <tr>
                                <th scope="row"><?= $no?></th>
                                <td><?= $p['judul']?></th>
                                <td><?= $p['pengarang']?></th>
                                <td><?= $p['stok']?></th>
                                <td>
                                    <a href="" class="badge badge-success">Detail</a>
                                    <a href="edit.php?id_buku=<?= $p['id_buku']?>" class="badge badge-warning">Edit</a>
                                    <a href="hapus.php?id_buku=<?= $p['id_buku']?>" class="badge badge-danger">Hapus</a>
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