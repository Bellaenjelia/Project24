<h1 class="mt-4">Ubah Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                    <?php
                        $id = $_GET['id']; 

                        if(isset($_POST['submit'])) {
                            $kategori = $_POST['kategori'];
                            $query = mysqli_query($koneksi, "UPDATE kategoribuku SET NamaKategori='$kategori' WHERE KategoriID=$id");

                            if($query) {
                                echo '<script>alert("Ubah kategori berhasil.");</script>';
                            } else {
                                echo '<script>alert("Ubah kategori gagal.");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT * FROM kategoribuku WHERE KategoriID=$id");
                        $data = mysqli_fetch_array($query);
                    ?>
                <div class="row" mb-3>
                     <div class="col-md-2">Nama Kategori</div>
                     <div class="col-md-8"><input type="text" class="form-control" value="<?php echo $data['NamaKategori']; ?>" name="kategori"></div>
                </div>
                <div class="row">
                    <div class="coll-md-2"></div>
                    <div class="coll-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fa-solid fa-floppy-disk"></i></button>
                        <button type="reset" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i></button>
                        <a href="?page=kategori" class="btn btn-danger"><i class="fa-solid fa-backward"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>