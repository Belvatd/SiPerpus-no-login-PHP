<?php
include 'aset/header.php';
include 'koneksi.php';

$sql_buku = "SELECT * FROM buku";
$res_buku = mysqli_query($kon, $sql_buku);

$count_buku = mysqli_affected_rows($kon);


$sql_anggota = "SELECT * FROM anggota";
$res_anggota = mysqli_query($kon, $sql_anggota);

$count_anggota = mysqli_affected_rows($kon);

$sql_peminjaman = "SELECT * FROM peminjaman";
$res_peminjaman = mysqli_query($kon, $sql_peminjaman);

$count_peminjaman = mysqli_affected_rows($kon);


?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
        <hr class="bg-light">
        </div>
    </div>

        <div class ="row">
        <div class="col-md-4">
            <div class="card bg-danger" style="width: 18rem;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah Buku</h5>
                    <p class="card-text" style="font-size:60px"><?= $count_buku ?></p>
                    <a href="http://localhost/siperpus/buku/index.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-warning" style="width: 18rem;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah Anggota</h5>
                    <p class="card-text" style="font-size:60px"><?= $count_anggota ?></p>
                    <a href="http://localhost/siperpus/buku/index.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card bg-info" style="width: 18rem;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah Transaksi</h5>
                    <p class="card-text" style="font-size:60px"><?= $count_peminjaman ?></p>
                    <a href="http://localhost/siperpus/buku/index.php" class="text-white">Lebih Detail <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'aset/footer.php';
?>