<h1 class="mt-4">Tambah Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <?php
                    if(isset($_POST['submit'])) {
                        $user = $_SESSION['user']['UserID'];
                        $bukuid = $_POST['bukuid'];
                        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                        $status_peminjaman = $_POST['status_peminjaman'];
                        $jumlah_peminjaman = $_POST['jumlah_peminjaman'];

                        $stok_query = mysqli_query($koneksi, "SELECT jumlah_buku FROM buku WHERE BukuID = '$bukuid'");
                        if (mysqli_num_rows($stok_query) > 0) {
                            $data = mysqli_fetch_array($stok_query);
                            $stok = $data['jumlah_buku'];

                            if ($jumlah_peminjaman > $stok) {
                                echo '<script>alert("Stok habis!");</script>';
                            } else {
                                $query = mysqli_query($koneksi, "INSERT INTO peminjaman(UserID,BukuID,TanggalPeminjaman,TanggalPengembalian,StatusPeminjaman,Jumlah_Peminjaman) values('$user','$bukuid','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman','$jumlah_peminjaman')");

                                if($query) {
                                    echo '<script>alert("Tambah peminjaman buku berhasil.");</script>';
                                }else{
                                    echo '<script>alert("Tambah peminjaman buku gagal.");</script>';
                                }
                            }
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
                     <div class="col-md-2">Tanggal Peminjaman</div>
                     <div class="col-md-8">
                        <input type="date" class="form-control" name="tanggal_peminjaman">
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Tanggal Pengembalian</div>
                     <div class="col-md-8">
                        <input type="date" class="form-control" name="tanggal_pengembalian">
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Status Peminjaman</div>
                     <div class="col-md-8">
                       <select name="status_peminjaman" class="form-control">
                            <option value="dipinjam">Dipinjam</option>
                            <option value="dikembalikan">Dikembalikan</option>
                       </select>
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Jumlah Peminjaman</div>
                     <div class="col-md-8">
                     <input type="text" class="form-control" name="jumlah_peminjaman">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="coll-md-2"></div>
                    <div class="coll-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fa-solid fa-floppy-disk"></i></button>
                        <button type="reset" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i></button>
                        <a href="?page=peminjaman" class="btn btn-danger"><i class="fa-solid fa-backward"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>