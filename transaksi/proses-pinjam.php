<?php

include '../koneksi.php';
include 'fungsi-transaksi.php';

if(isset($_POST['btnPinjam']))
{
    $id_anggota = $_POST['id_anggota'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_jatuh_tempo = date('Y-m-d', strtotime($tgl_pinjam .  '7 days'));

    $sql = "INSERT INTO peminjaman(id_anggota, id_buku, tgl_pinjam, tgl_jatuh_tempo, id_petugas)
            VALUES($id_anggota, $id_buku, '$tgl_pinjam', '$tgl_jatuh_tempo', 2)";
    
    $stok = ambilStok($kon, $id_buku); //ambil data stok buku

    
    if(cekPinjam($kon, $id_anggota) && $stok > 0)
    {
        $res = mysqli_query($kon, $sql);

        $count = mysqli_affected_rows($kon);

        $stok_update = $stok - 1;
        if($count == 1) 
        {
            updateStok($kon, $id_buku, $stok_update);
            header("Location: index.php");
        }
   
    } 
    else {
    echo "Tidak bisa pinjam";
        // header("Location: index.php");
    }
}     

else
{
    header("Location: form-pinjam.php");
}
?>