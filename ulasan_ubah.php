<h1 class="mt-4">Ubah Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                $id = $_GET['id'];
                    if(isset($_POST['submit'])) {
                        $user = $_SESSION['user']['UserID'];
                        $bukuid = $_POST['bukuid'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "UPDATE ulasanbuku set BukuID='$bukuid', Ulasan='$ulasan', Rating='$rating' WHERE UlasanID=$id");

                        if($query) {
                            echo '<script>alert("Ubah ulasan buku berhasil.");</script>';
                        }else{
                            echo '<script>alert("Ubah ulasan buku gagal.");</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku WHERE UlasanID=$id");
                    $data = mysqli_fetch_array($query);
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Buku</div>
                    <div class="class col-md-8">
                        <select name="bukuid" class="form-control">
                            <?php
                                $b = mysqli_query($koneksi, "SELECT*FROM buku");
                                while($buku = mysqli_fetch_array($b)) {
                                    ?>
                                    <option <?php if($data['BukuID'] == $buku['BukuID']) echo 'selected'; ?> value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Ulasan</div>
                     <div class="col-md-8">
                       <textarea name="ulasan" rows="3" class="form-control"><?php echo $data['Ulasan']; ?></textarea>
                     </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Rating</div>
                     <div class="col-md-8">
                        <select name="rating" class="form-control">
                            <?php
                            for ($i=1; $i <=5 ; $i++) {
                            ?>
                                <option <?php if($data['Rating'] == $i) echo 'selected'; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
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