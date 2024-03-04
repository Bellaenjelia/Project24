<h1 class="mt-4">Ubah Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    $id = $_GET['id'];
                    if(isset($_POST['submit'])) {
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $jumlah_buku = $_POST['jumlah_buku'];
                        $query = mysqli_query($koneksi, "UPDATE buku SET Judul='$judul',Penulis='$penulis',Penerbit='$penerbit',TahunTerbit='$tahun_terbit',jumlah_buku='$jumlah_buku' WHERE BukuID=$id");

                        if($query) {
                            echo '<script>alert("Ubah data buku berhasil.");</script>';
                        }else{
                            echo '<script>alert("Ubah data buku gagal.");</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE BukuID=$id");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="row mb-3">
                     <div class="col-md-2">Judul</div>
                     <div class="col-md-8"><input type="text" value="<?php echo $data['Judul']; ?>" class="form-control" name="judul"></div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Penulis</div>
                     <div class="col-md-8"><input type="text" value="<?php echo $data['Penulis']; ?>" class="form-control" name="penulis"></div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Penerbit</div>
                     <div class="col-md-8"><input type="text" value="<?php echo $data['Penerbit']; ?>" class="form-control" name="penerbit"></div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Tahun Terbit</div>
                     <div class="col-md-8"><input type="number" value="<?php echo $data['TahunTerbit']; ?>" class="form-control" name="tahun_terbit"></div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Jumlah Buku</div>
                     <div class="col-md-8"><input type="number" value="<?php echo $data['jumlah_buku']; ?>" class="form-control" name="jumlah_buku"></div>
                </div>
                <div class="row mb-3">
                    <div class="coll-md-2"></div>
                    <div class="coll-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fa-solid fa-floppy-disk"></i></button>
                        <button type="reset" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i></button>
                        <a href="?page=buku" class="btn btn-danger"><i class="fa-solid fa-backward"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>