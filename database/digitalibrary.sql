-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `BukuID` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `Penerbit` varchar(255) NOT NULL,
  `TahunTerbit` int(11) NOT NULL,
  `jumlah_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`BukuID`, `Judul`, `Penulis`, `Penerbit`, `TahunTerbit`, `jumlah_buku`) VALUES
(1, 'Keajaiban Toko Kelontong Namiya', 'Keigo Higashino', 'Gramedia Pustaka Utama', 2021, 6),
(2, 'Kartun Biologi', 'Larry Gonick', 'Kepustakaan Populer Gramedia', 2021, 2),
(3, 'Filosofi Teras', 'Keigo Higashino', 'Henry Manampiring', 2018, 6),
(4, 'Menua dengan Gembira', 'Andina Dwifatma', 'shira media', 2023, 4),
(5, 'Detik-Detik Asesmen Nasional SMA/MA : AKM Numerasi', 'Eko Sujatmiko, Suparno, Miyanto', 'PT Penerbit Intan Pariwara', 2020, 1),
(14, 'Adakah Orang Sepertiku?', 'Lucia Song', 'shira media', 2020, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `KategoriID` int(11) NOT NULL,
  `NamaKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`KategoriID`, `NamaKategori`) VALUES
(1, 'Fiksi'),
(2, 'Pendidikan'),
(4, 'Seni'),
(5, 'Resep & Masakan'),
(6, 'Agama'),
(9, 'Majalah'),
(13, 'Sains');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `KategoriBukuID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `KategoriID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku_relasi`
--

INSERT INTO `kategoribuku_relasi` (`KategoriBukuID`, `BukuID`, `KategoriID`) VALUES
(1, 5, 2),
(3, 2, 4),
(4, 1, 1),
(5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `KoleksiID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksipribadi`
--

INSERT INTO `koleksipribadi` (`KoleksiID`, `UserID`, `BukuID`) VALUES
(1, 1, 5),
(3, 4, 2),
(4, 5, 1),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `log_peminjaman`
--

CREATE TABLE `log_peminjaman` (
  `keterangan` varchar(25) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_peminjaman`
--

INSERT INTO `log_peminjaman` (`keterangan`, `waktu`) VALUES
('Tamnah Data Peminjaman Bu', '2024-01-23 08:45:19'),
('Tambah Data Peminjaman', '2024-01-23 08:45:19'),
('Hapus Data Peminjaman Buk', '2024-01-23 08:49:11'),
('Hapus Data Peminjaman Buk', '2024-01-23 08:49:16'),
('Ubah Data Peminjaman Buku', '2024-01-23 08:51:34'),
('Ubah Data Peminjaman Buku', '2024-01-23 09:15:16'),
('Ubah Data Peminjaman Buku', '2024-01-23 09:15:50'),
('Ubah Data Peminjaman Buku', '2024-01-23 09:15:50'),
('Ubah Data Peminjaman Buku', '2024-01-23 09:34:20'),
('Ubah Data Peminjaman Buku', '2024-01-23 09:34:20'),
('Ubah Data Peminjaman Buku', '2024-01-23 09:34:20'),
('Tamnah Data Peminjaman Bu', '2024-01-23 09:45:17'),
('Tambah Data Peminjaman', '2024-01-23 09:45:17'),
('Tamnah Data Peminjaman Bu', '2024-02-18 15:23:42'),
('Tambah Data Peminjaman', '2024-02-18 15:23:42'),
('Tamnah Data Peminjaman Bu', '2024-02-18 15:24:17'),
('Tambah Data Peminjaman', '2024-02-18 15:24:17'),
('Ubah Data Peminjaman Buku', '2024-02-18 15:59:49'),
('Ubah Data Peminjaman Buku', '2024-02-18 16:09:40'),
('Ubah Data Peminjaman Buku', '2024-02-18 16:09:50'),
('Ubah Data Peminjaman Buku', '2024-02-18 16:10:01'),
('Ubah Data Peminjaman Buku', '2024-02-18 16:10:48'),
('Tamnah Data Peminjaman Bu', '2024-02-19 09:04:06'),
('Tambah Data Peminjaman', '2024-02-19 09:04:06'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:04:21'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:04:30'),
('Tamnah Data Peminjaman Bu', '2024-02-19 09:05:49'),
('Tambah Data Peminjaman', '2024-02-19 09:05:49'),
('Tamnah Data Peminjaman Bu', '2024-02-19 09:47:15'),
('Tambah Data Peminjaman', '2024-02-19 09:47:15'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:47:37'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:48:02'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:48:40'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:49:44'),
('Tamnah Data Peminjaman Bu', '2024-02-19 09:50:05'),
('Tambah Data Peminjaman', '2024-02-19 09:50:05'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:52:18'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:53:47'),
('Tamnah Data Peminjaman Bu', '2024-02-19 09:55:57'),
('Tambah Data Peminjaman', '2024-02-19 09:55:57'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:57:33'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:58:18'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:58:29'),
('Tamnah Data Peminjaman Bu', '2024-02-19 09:59:20'),
('Tambah Data Peminjaman', '2024-02-19 09:59:20'),
('Ubah Data Peminjaman Buku', '2024-02-19 09:59:35'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Hapus Data Peminjaman Buk', '2024-02-19 11:32:52'),
('Tamnah Data Peminjaman Bu', '2024-02-19 11:33:16'),
('Tambah Data Peminjaman', '2024-02-19 11:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `kejadian` varchar(25) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`kejadian`, `waktu`) VALUES
('Tambah Data', '2024-01-23 08:25:56'),
('Hapus Data', '2024-01-23 08:27:23'),
('Hapus Data', '2024-01-23 08:27:41'),
('Hapus Data', '2024-01-23 08:27:48'),
('Hapus Data', '2024-01-23 08:27:52'),
('Hapus Data', '2024-01-23 08:27:57'),
('Update Data', '2024-01-23 08:31:02'),
('Update Data', '2024-01-23 08:31:29'),
('Tambah Data', '2024-01-23 08:37:24'),
('Ubah Data', '2024-01-23 08:37:24'),
('Tambah Data', '2024-01-23 08:37:24'),
('Tambah Data', '2024-01-23 13:43:27'),
('Ubah Data', '2024-01-23 13:43:27'),
('Tambah Data', '2024-01-23 13:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `PeminjamanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `TanggalPeminjaman` date NOT NULL,
  `TanggalPengembalian` date NOT NULL,
  `StatusPeminjaman` enum('Dipinjam','Dikembalikan') NOT NULL,
  `jumlah_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`PeminjamanID`, `UserID`, `BukuID`, `TanggalPeminjaman`, `TanggalPengembalian`, `StatusPeminjaman`, `jumlah_peminjaman`) VALUES
(16, 15, 1, '2024-02-01', '2024-02-02', 'Dipinjam', 1);

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `del_peminjaman` AFTER DELETE ON `peminjaman` FOR EACH ROW insert into log_peminjaman values('Hapus Data Peminjaman Buku',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_peminjaman` AFTER INSERT ON `peminjaman` FOR EACH ROW insert into log_peminjaman values('Tambah Data Peminjaman',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inst_peminjaman` AFTER INSERT ON `peminjaman` FOR EACH ROW insert into log_peminjaman values('Tamnah Data Peminjaman Buku',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kurangi_stok` AFTER INSERT ON `peminjaman` FOR EACH ROW update buku set jumlah_buku=jumlah_buku-new.jumlah_peminjaman where BukuID=new.BukuID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updt_peminjaman` AFTER UPDATE ON `peminjaman` FOR EACH ROW insert into log_peminjaman values('Ubah Data Peminjaman Buku',now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `UlasanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `Ulasan` text NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`UlasanID`, `UserID`, `BukuID`, `Ulasan`, `Rating`) VALUES
(1, 1, 5, 'Keren', 5),
(5, 2, 4, 'Keren', 4),
(8, 15, 2, 'Keren', 5),
(9, 4, 4, 'ydh', 2),
(10, 5, 14, 'Bagus', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Level` enum('Administrator','Petugas','Peminjam') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `Email`, `NamaLengkap`, `Alamat`, `Level`) VALUES
(1, 'amira', 'amira', 'amiramir@gmail.com', 'Amira Shafwa Qathrunnada', 'Metro', 'Peminjam'),
(2, 'peminjam', '55f3894bc5fc71fead8412d321c2952c', 'peminjam@gmail.com', 'Peminjam', 'Batanghari', 'Peminjam'),
(4, 'jeno', '2c5a506a135b1806c1eacce2efaeea05', 'jeno@gmail.com', 'Lee Jeno', 'Surabaya', 'Peminjam'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Administrator', 'Bandar Lampung', 'Administrator'),
(7, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas@gmail.com', 'Petugas', 'Metro', 'Petugas'),
(11, 'jaehyun', 'jaehyun', 'jaehyun01@gmail.com', 'Lee Jaehyun', 'Korea', 'Peminjam'),
(14, 'Bella', 'bella', 'bella@gmail.com', 'Bellala', 'Sumber Agung', 'Peminjam'),
(15, 'jaehyun', 'd9e7f4d9a1f8c4bbcc08aca77e1efa37', 'jaehyun@gmail.com', 'Lee Jaehyun', 'Korea', 'Peminjam');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `del_user` AFTER DELETE ON `user` FOR EACH ROW insert into log_user values ('Hapus Data',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_user` AFTER INSERT ON `user` FOR EACH ROW insert into log_user values ('Tambah Data',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insr_user` AFTER INSERT ON `user` FOR EACH ROW insert into log_user values('Ubah Data',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inst_user` AFTER INSERT ON `user` FOR EACH ROW insert into log_user values('Tambah Data',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updt_user` AFTER UPDATE ON `user` FOR EACH ROW insert into log_user values ('Update Data',now())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`BukuID`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`KategoriID`);

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`KategoriBukuID`),
  ADD KEY `kategoribuku_relasi_ibfk_1` (`BukuID`),
  ADD KEY `kategoribuku_relasi_ibfk_2` (`KategoriID`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`KoleksiID`),
  ADD KEY `koleksipribadi_ibfk_1` (`UserID`),
  ADD KEY `koleksipribadi_ibfk_2` (`BukuID`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`PeminjamanID`),
  ADD KEY `peminjaman_ibfk_1` (`UserID`),
  ADD KEY `peminjaman_ibfk_2` (`BukuID`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`UlasanID`),
  ADD KEY `ulasanbuku_ibfk_1` (`UserID`),
  ADD KEY `ulasanbuku_ibfk_2` (`BukuID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `BukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `KategoriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `KategoriBukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `KoleksiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `PeminjamanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `UlasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`KategoriID`) REFERENCES `kategoribuku` (`KategoriID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `koleksipribadi_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koleksipribadi_ibfk_2` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasanbuku_ibfk_2` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
