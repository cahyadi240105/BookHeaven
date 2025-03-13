-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2022 pada 15.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_book`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `data`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data` (
`nama_pelanggan` varchar(100)
,`nama_kurir` varchar(50)
,`alamat_pengirim` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `data_produk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_produk` (
`nama_produk` varchar(100)
,`harga_produk` int(11)
,`stok_produk` int(11)
,`jumlah_pembelian` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL,
  `tarif` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `tarif`) VALUES
(1, 'J&T REG(2 Hari Kerja)', '9000'),
(2, 'JNE REG(2 Hari Kerja)', '10000'),
(3, 'JNE YES(1 Hari Kerja)', '24000'),
(4, 'Grab Instan(Lokasi Diluar Service)', '20000'),
(5, 'Grab Same Day(Lokasi Diluar Service)', '20000'),
(6, 'Rush Delivery by Grab Express(Lokasi Diluar Servic', '20000'),
(7, 'GO-SEND Same Day(Lokasi Diluar Service)', '20000'),
(9, 'Shoopee', '20000'),
(10, 'Gojek', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `gmail_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `gmail_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`) VALUES
(1, 'nur@gmail.com', '123', 'nur', '081267856785'),
(2, 'rahman@gmail.com', '123', 'rahman', '081267575678'),
(3, 'irham@gmail.com', '123', 'irham', '083819085582'),
(6, 'siti@gmail.com', '1234', 'siti', '086756786'),
(8, 'cahyadi@smkn1.co.id', '123', 'Cahyadi Prasetyo', '085835602774');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `id_pembelian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`, `id_pembelian`) VALUES
(3, 'Cahyadi Prasetyo', 'Mandiri ', 9999999, '2022-08-24', '-', 2),
(4, 'Nandang', 'Mega Bank', 6500000, '2022-08-26', '-', 6),
(5, 'Aditia', 'BCA', 7500000, '2022-08-30', '-', 5),
(6, 'Yudha', 'Mandiri', 1500000, '2022-08-30', '-', 3),
(7, 'Aidil Bailhaqi', 'BRI', 7000000, '2022-08-25', '-', 1),
(10, 'bayu', 'BNI', 200000, '2022-09-13', '-', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL DEFAULT current_timestamp(),
  `total_pembelian` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL,
  `resi_pengiriman` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_kurir`, `tanggal_pembelian`, `total_pembelian`, `tarif`, `alamat_pengirim`, `status_pembelian`, `resi_pengiriman`) VALUES
(1, 1, 2, '2022-08-22', 500000, 0, 'JL.Kutilang No.10', 'Tertunda', '-'),
(2, 3, 1, '2022-08-24', 75000, 0, 'Jl.Sembilang No.46', 'Terkirim', '-'),
(3, 2, 3, '2022-08-23', 150000, 0, 'Jl.Udang No.101', 'Terkirim', '-'),
(4, 6, 5, '2022-08-23', 200000, 0, 'Jl.Hiu No.90', 'Terkirim', '-'),
(5, 3, 6, '2022-08-23', 300000, 0, 'Jl.Merdeka No.36', 'Terkirim', '-'),
(6, 1, 1, '2022-08-23', 125000, 0, 'Jl.Merdeka', 'Tertunda', '-'),
(7, 6, 2, '2022-08-24', 350000, 0, 'Jl.', 'Terkirim', '-'),
(10, 8, 10, '2022-09-08', 199999, 1999, 'Kp.sei mantang', 'Terkirim', 'Bank Mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah_pembelian`) VALUES
(1, 2, 2, 5),
(2, 3, 4, 3),
(3, 4, 5, 1),
(13, 5, 6, 3),
(14, 6, 7, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `resep_produk` varchar(100) NOT NULL,
  `stok_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `resep_produk`, `stok_produk`) VALUES
(2, 'Mary Higgins C : Daddy Little Girl', 44999, 150, 'ttb1.jpg', 'Ketika Ellie Cavanaugh berusia delapan tahun', 'ttb1alt.jpg', 5),
(4, 'Harry Potter and the Half Blood Prince', 100000, 300, 'ttb3.jpg', 'Khawatir dengan pengalaman pertemuan dengan V...', 'ttb3alt.jpg', 2),
(5, 'The Hobbit : There and Back Again ', 100000, 190, 'ttb4.jpg', 'Kisah bermula ketika Bilbo baggins yang merupakan', 'ttb4alt.jpg', 0),
(6, 'PC Only', 40000, 100, 'ttb5.jpg', 'Laskar Pelangi yang menceritakan tentang masa k..', 'ttb5alt.jpg', 1),
(7, 'Agatha Christie : The Pale House', 50000, 90, 'ttb6.jpg', 'seorang wanita memanggil pastor disaat sedang s..', 'ttb6alt.jpg', 1),
(10, 'Laptop', 20, 200, 'ttb8.jpg', 'Lenovo Yoga', 'ttb8alt.jpg', 3),
(13, 'handphone', 45000, 200, 'tb1.jpg', 'oddo', 'tb1alt.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name`, `email`, `password`) VALUES
(3, 'Cahyadi Prasetyo', 'cahyadiprasetyo659@gmail.com', '$2y$10$SWn3mxHJpwK3D.uOFkQXGef7GJipsOReXhHN9sGzQQHjE8q0T8viO'),
(10, 'cahyadi', 'cahyadi@gmail.com', '$2y$10$9E7jW8f9/OWShRRvzNJYF.Y0XiPzjifaZCpM1u0tMNzT/RBcCpcta');

-- --------------------------------------------------------

--
-- Struktur untuk view `data`
--
DROP TABLE IF EXISTS `data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data`  AS SELECT `a`.`nama_pelanggan` AS `nama_pelanggan`, `c`.`nama_kurir` AS `nama_kurir`, `b`.`alamat_pengirim` AS `alamat_pengirim` FROM ((`pelanggan` `a` join `pembelian` `b` on(`a`.`id_pelanggan` = `b`.`id_pelanggan`)) join `kurir` `c` on(`b`.`id_kurir` = `c`.`id_kurir`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `data_produk`
--
DROP TABLE IF EXISTS `data_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_produk`  AS SELECT `a`.`nama_produk` AS `nama_produk`, `a`.`harga_produk` AS `harga_produk`, `a`.`stok_produk` AS `stok_produk`, `b`.`jumlah_pembelian` AS `jumlah_pembelian` FROM (`produk` `a` join `pembelian_produk` `b` on(`a`.`id_produk` = `b`.`id_produk`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_kurir` (`id_kurir`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`);

--
-- Ketidakleluasaan untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD CONSTRAINT `pembelian_produk_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `pembelian_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
