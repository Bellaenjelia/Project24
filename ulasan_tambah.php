<h1 class="mt-4">Tambah Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    if(isset($_POST['submit'])) {
                        $user = $_SESSION['user']['UserID'];
                        $bukuid = $_POST['bukuid'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku (UserID,BukuID,Ulasan,Rating) values('$user', $bukuid,'$ulasan','$rating')");

                        if($query) {
                            echo '<script>alert("Tambah ulasan buku berhasil.");</script>';
                        }else{
                            echo '<script>alert("Tambah ulasan buku gagal.");</script>';
                        }
                    }
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Buku</div>
                    <div class="class col-md-8">
                        <select name="bukuid" class="form-control">
                            <?php
                                $b = mysqli_query($koneksi, "SELECT*FROM buku");
                                while($buku = mysqli_fetch_array($b)) {
                                    ?>
                                    <option value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Ulasan</div>
                     <div class="col-md-8"><input type="text" class="form-control" name="ulasan"></div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Rating</div>
                     <div class="col-md-8">
                        <select name="rating" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="coll-md-2"></div>
                    <div class="coll-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fa-solid fa-floppy-disk"></i></button>
                        <button type="reset" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i></button>
                        <a href="?page=ulasan" class="btn btn-danger"><i class="fa-solid fa-backward"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>