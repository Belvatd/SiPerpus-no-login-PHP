<?php
include '../aset/header.php';
include '../koneksi.php';

    $query = "SELECT * FROM kategori ORDER BY (id_kategori)";

    $hasil = mysqli_query($kon, $query);
    
    $kategori = array();

    while($data = mysqli_fetch_assoc($hasil))
    {
        $kategori[] = $data;
    }
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Data Buku</h2>/
                </div>
                <div class="card-body">
                    <form method="POST" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="buku">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Buku">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Nama Penulis">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <input type="text" name="ringkasan" class="form-control" id="ringkasan" placeholder="Ringkasan Cerita">
                        </div>
                        <!-- <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="text" name="cover" class="form-control" id="cover" placeholder="Tambah File">
                        </div> -->
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" placeholder="Jumlah Stok">
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