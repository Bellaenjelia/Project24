<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="200">Username</td>
                        <td width="1">:</td>
                        <td><?php echo $_SESSION['user']['Username']; ?></td>
                    </tr>
                    <tr>
                        <td width="200">Level User</td>
                        <td width="1">:</td>
                        <td><?php echo $_SESSION['user']['Level']; ?></td>
                    </tr>
                    <tr>
                        <td width="200">Tanggal Login</td>
                        <td width="1">:</td>
                        <td><?php echo date('d-m-Y H:i:s'); ?></td>
                    </tr>
                </table>
			</div>
                            </li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <?php
                                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategoribuku"));
                                        ?>
                                    Total Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                                        ?>
                                    Total Buku</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasanbuku"));
                                        ?>
                                    Total Ulasan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        <?php
                                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                                        ?>
                                    Total User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</main>