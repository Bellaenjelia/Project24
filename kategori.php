<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <?php
        if($_SESSION['user']['Level'] !='Peminjam'){
        ?>
            <a href="?page=kategori_tambah" class="btn btn-primary"><i class="fa-solid fa-folder-plus"></i> Tambah Kategori</a>
            <?php
        }
        ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
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
                    $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['NamaKategori']; ?></td>
                            <?php
                            if($_SESSION['user']['Level'] !='Peminjam'){
                            ?>
                            <td>
                                <a href="?page=kategori_ubah&&id=<?php echo $data['KategoriID']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=kategori_hapus&&id=<?php echo $data['KategoriID']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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