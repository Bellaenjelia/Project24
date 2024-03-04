<h1 class="mt-4">Ubah Peminjaman Buku</h1>
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
                        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                        $status_peminjaman = $_POST['status_peminjaman'];
                        $jumlah_peminjaman = $_POST['jumlah_peminjaman'];

                        $query = mysqli_query($koneksi, "UPDATE peminjaman set bukuid='$bukuid', TanggalPeminjaman='$tanggal_peminjaman', TanggalPengembalian='$tanggal_pengembalian', StatusPeminjaman='$status_peminjaman', jumlah_peminjaman='$jumlah_peminjaman' WHERE PeminjamanID=$id");

                        if ($status_peminjaman == 'Dikembalikan') {
                            $query_stok = mysqli_query($koneksi, "UPDATE buku SET jumlah_buku=jumlah_buku+'$jumlah_peminjaman' WHERE BukuID=$bukuid");
                        }
                        if($query && $query_stok) {
                            echo '<script>alert("Ubah peminjaman buku berhasil.");</script>';
                        } else {
                            echo '<script>alert("Ubah peminjaman buku gagal.");</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman WHERE PeminjamanID=$id");
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
                                    <option <?php if($buku['BukuID'] == $data['BukuID']) echo 'selected'; ?> value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Tanggal Peminjaman</div>
                     <div class="col-md-8">
                        <input type="date" class="form-control" value="<?php echo $data['TanggalPeminjaman']; ?>" name="tanggal_peminjaman">
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Tanggal Pengembalian</div>
                     <div class="col-md-8">
                        <input type="date" class="form-control" value="<?php echo $data['TanggalPengembalian']; ?>" name="tanggal_pengembalian">
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Status Peminjaman</div>
                     <div class="col-md-8">
                       <select name="status_peminjaman" class="form-control">
                            <option value="Dipinjam" <?php if($data['StatusPeminjaman'] == 'Dipinjam') echo 'selected'; ?>>Dipinjam</option>
                            <option value="Dikembalikan" <?php if($data['StatusPeminjaman'] == 'Dikembalikan') echo 'selected'; ?>>Dikembalikan</option>
                       </select>
                    </div>
                </div>
                <div class="row mb-3">
                     <div class="col-md-2">Jumlah Peminjaman</div>
                     <div class="col-md-8">
                     <input type="text" class="form-control" value="<?php echo $data['jumlah_peminjaman']; ?>" name="jumlah_peminjaman">
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