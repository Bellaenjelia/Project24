<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <?php
        if($_SESSION['user']['Level'] !='Peminjam'){
        ?>
            <a href="?page=buku_tambah" class="btn btn-primary"><i class="fa-solid fa-folder-plus"></i> Tambah Buku</a>
        <?php
        }
        ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Buku</th>
                    <?php
                    if($_SESSION['user']['Level'] !='Peminjam'){
                    ?>
                    <th>Aksi</th>
                    <?php
                    }
                    ?>
                </tr>
                <?Php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM buku");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td width="200"><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['Penulis']; ?></td>
                            <td><?php echo $data['Penerbit']; ?></td>
                            <td><?php echo $data['TahunTerbit']; ?></td>
                            <td><?php echo $data['jumlah_buku']; ?></td>
                            <?php
                            if($_SESSION['user']['Level'] !='Peminjam'){
                            ?>
                            <td>
                                <a href="?page=buku_ubah&&id=<?php echo $data['BukuID']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=buku_hapus&&id=<?php echo $data['BukuID']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
    </div>
</div>