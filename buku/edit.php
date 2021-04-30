<?php
include '../koneksi.php';

$query = "SELECT * FROM kategori ORDER BY(id_kategori)";
$hasil = mysqli_query($kon, $query);
    
$kategori = array();
    

while($data = mysqli_fetch_assoc($hasil))
{
    $kategori[] = $data;
}


$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku INNER JOIN kategori
        ON buku.id_kategori = kategori.id_kategori
        WHERE id_buku = $id_buku";

$res = mysqli_query($kon, $sql);

$buku = mysqli_fetch_assoc($res);

if(isset($_POST['simpan']))
    {
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $pengarang = $_POST['pengarang'];
        $ringkasan = $_POST['ringkasan'];
        $stok = $_POST['stok'];
        $id_kategori = $_POST['id_kategori'];

        $q_update = "UPDATE buku SET judul = '$judul', 
                                     penerbit = '$penerbit',
                                     pengarang = '$pengarang',
                                     ringkasan = '$ringkasan',
                                     stok = $stok,
                                     id_kategori = $id_kategori
                    WHERE id_buku = $id_buku";

        $hasil_update = mysqli_query($kon, $q_update);

        $cek = mysqli_affected_rows($kon);

        if($cek == 1)
        {
            header("Location: index.php");
        }

        else{
            header("Location: edit.php");
        }
    }

    
include '../aset/header.php'
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data Buku</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="buku">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $buku['judul'] ?>">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= $buku['penerbit'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" id="pengarang" value="<?= $buku['pengarang'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <input type="text" name="ringkasan" class="form-control" id="ringkasan" value="<?= $buku['ringkasan'] ?>">
                        </div>
                        <!-- <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="text" name="cover" class="form-control" id="cover" placeholder="Tambah File">
                        </div> -->
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" value="<?= $buku['stok'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="id_kategori">
                                <?php
                                    foreach ($kategori as $g) { ?>
                                        <option value="<?= $g['id_kategori']?>"> <?= $g['kategori'] ?> </option>
                                <?php    }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>