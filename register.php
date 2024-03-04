<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register ke Perpustakaan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])) {
                                                $username = $_POST['username'];
                                                $password = $_POST['password'];
                                                $email = $_POST['email'];
                                                $nama_lengkap = $_POST['nama_lengkap'];
                                                $alamat = $_POST['alamat'];
                                                $level = $_POST['level'];
                                                $password = md5($_POST['password']);


                                                $insert =  mysqli_query($koneksi, "INSERT INTO user(Username,Password,Email,NamaLengkap,Alamat,Level) VALUES('$username', '$password', '$email', '$nama_lengkap', '$alamat', '$level')");

                                                if($insert){
                                                    echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php";</script>';
                                                }else{
                                                    echo '<script>alert("Register gagal, silahkan ulangi kembali.")</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-4"  type="text" required name="username" placeholder="Masukan Username Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" 
                                                required name="password" placeholder="Masukkan Password Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-4"  type="text"
                                                required name="email" placeholder="Masukan Email Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputUsernameAddress">Nama Lengkap</label>
                                                <input class="form-control py-4" id="inputUsernameAddress" type="text"
                                                required  name="nama_lengkap" placeholder="Masukan Nama Lengkap Anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea required name="alamat" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" class="form-control">
                                                    <option value="peminjam">Peminjam</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="text-center mt-3">
											<button type="submit" class="btn btn-lg" style="background: pink;" name="register">Register</a></button>
											<p><small>Have an account? <a href="login.php">Login</a></small></p>
										</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
