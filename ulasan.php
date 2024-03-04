<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <a href="?page=ulasan_tambah" class="btn btn-primary"><i class="fa-solid fa-folder-plus"></i> Tambah Ulasan</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
                <?Php
                $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku LEFT JOIN user on user.UserID = ulasanbuku.UserID LEFT JOIN buku on buku.BukuID = ulasanbuku.BukuID");
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['NamaLengkap']; ?></td>
                            <td><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['Ulasan']; ?></td>
                            <td><?php echo $data['Rating']; ?></td>
                            <td>
                                <?php
                                $user = null;
                                if (isset($_SESSION['user']['UserID'])) {
                                    $user = $_SESSION['user']['UserID'];
                                }
                                if ($data['UserID'] == $user) {
                                ?>
                                <a href="?page=ulasan_ubah&&id=<?php echo $data['UlasanID']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=ulasan_hapus&&id=<?php echo $data['UlasanID']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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