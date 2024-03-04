<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Peminjaman</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th width="1">No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th width="10">Tanggal Peminjaman</th>
                    <th width="10">Tanggal Pengembalian</th>
                    <th>Status Peminjaman</th>
                    <th width="10">Jumlah Peminjaman</th>
                    <th>Aksi</th>
                </tr>
                <?Php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID WHERE peminjaman.UserID=" . $_SESSION['user']['UserID']);
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['NamaLengkap']; ?></td>
                            <td><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['TanggalPeminjaman']; ?></td>
                            <td><?php echo $data['TanggalPengembalian']; ?></td>
                            <td><?php echo $data['StatusPeminjaman']; ?></td>
                            <td><?php echo $data['jumlah_peminjaman']; ?></td>
                            <td>
                                <?php
                                    if($data['StatusPeminjaman'] != 'Dikembalikan') {
                                ?>
                                <a href="?page=peminjaman_ubah&&id=<?php echo $data['PeminjamanID']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
    </div>
</div>