-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 04.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idplay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `subject`, `isi`, `image`, `tanggal`, `id_role`) VALUES
(2, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(3, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(4, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(5, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(6, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(7, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(8, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(9, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(10, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(11, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(12, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1),
(13, 'Pahami Koneksi Internet', 'Mari Pahami Koneksi Internet', '<div>Disaat semua harga pada naik dari BBM, Bahan kebutuhan pokok. Idplay mulai menurunkan harga di Bulan Oktober 2022 ini..</div><div>Up to 10 Mbps Rp&nbsp; 199.000&nbsp; menjadi&nbsp; Rp 179.000</div><div>Up to 20 Mbps Rp&nbsp; 269.000 &nbsp; menjadi&nbsp; Rp. 249.000</div><div>Up to 50 Mbps&nbsp; Rp 329.000&nbsp; menjadi&nbsp; Rp 299.000</div><div>segera dapatkan promo di bulan oktober ini ya, harga tetap selama masih berlangganan.&nbsp; segera hub <a href=\"https://wa.me/6281119505828?fbclid=IwAR0dhbGRyiGCmW0qo-EcIAXorTOzDkb2UhsPOJAWY2AQlHG8IDJo0_EAT-g\">https://wa.me/6281119505828</a></div>', '309052261_455565749884686_6148338649028536238_n.jpg', '2022-12-15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_p` char(100) NOT NULL,
  `keluhan` varchar(250) NOT NULL,
  `gambar` text NOT NULL,
  `validasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `cid` char(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`cid`, `nama`, `alamat`) VALUES
('110022993', 'Habeb', 'kjsdk jbakjdb kajsbdkj bkjsab kjdbsakj dbksajbdkjabs'),
('123456789', 'Gilang sp', 'asdjashd hsadhlas hldsha ljsahdj sahdjasldh lashdlah sldjhsaljd'),
('443399221', 'Alfin', 'jsbadjba jsabkdj baskjbkjdbkjba sjkdbsakj bdkjsbd kjsabkdjbakjsdbkajsbk jdasbjkdb ajksb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Administrator', 'admin', 'idplay@gmail.com', 'default.png', '$2y$10$yunSzMoO5uFDVZpBtn5La.sMmCgZ8cxVn317tqxGEsKfnrN8B2Pfi', 1, 1, 1655427300),
(17, 'Habib', 'habib', 'habib@gmail.com', 'WhatsApp_Image_2022-04-13_at_11_30_52_PM.jpeg', '$2y$10$IRHAYk/m/jKmXfctK279L.TwBEkiehsvwXaFUI7gC16VA05z8tyh6', 2, 1, 1670571587),
(18, 'Alfin Arbain', 'alfin', 'alfin@gmail.com', 'default.png', '$2y$10$IRHAYk/m/jKmXfctK279L.TwBEkiehsvwXaFUI7gC16VA05z8tyh6', 3, 1, 1670571587),
(19, 'Hasbi', 'hasbi', 'hasbi@gmail.com', 'default.png', '$2y$10$IRHAYk/m/jKmXfctK279L.TwBEkiehsvwXaFUI7gC16VA05z8tyh6', 4, 1, 1670571587),
(20, 'Handika Erwin', 'handika', 'handika@gmail.com', 'default.png', '$2y$10$M5IdHzyPFtU4mwdDlESguOLghZq5K70DjVj75FB1CizsTyWa7SwH2', 2, 1, 1670912685),
(21, 'Helmi', 'helmi', 'helmi@gmail.com', 'default.png', '$2y$10$wxfTtNgSj.brgL2Zqa0ZUuSvQhSx2Ee5Zuc8vEtT.KnFVBRNW1Y2C', 2, 1, 1670990265);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 8),
(6, 2, 2),
(7, 1, 4),
(8, 3, 2),
(9, 4, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_google`
--

CREATE TABLE `user_google` (
  `user_id` int(11) NOT NULL,
  `login_oauth_uid` varchar(128) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Management'),
(8, 'ManagementUser');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Noc'),
(3, 'Jaringan'),
(4, 'Sales');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'mdi mdi-view-dashboard', 1),
(2, 2, 'My Profile', 'user', 'mdi mdi-account', 1),
(3, 2, 'Edit Profile', 'user/edit', 'mdi mdi-account-alert', 1),
(4, 3, 'Menu Management', 'menu', 'mdi mdi-folder', 1),
(5, 3, 'Sub Menu Management', 'menu/subMenu', 'mdi mdi-folder-multiple', 1),
(6, 1, 'Role', 'admin/role', 'mdi mdi-account-star', 1),
(7, 2, 'Change Password', 'user/changePassword', 'mdi mdi-account-key', 1),
(13, 8, 'Data User Admin', 'ManagementUser', 'mdi mdi-account-multiple-plus', 1),
(27, 4, 'Pelanggan', 'management', 'mdi mdi-account-multiple', 1),
(28, 4, 'Keluhan', 'management/keluhan', 'mdi mdi-clipboard-account', 1),
(29, 8, 'Data User Petugas', 'ManagementUser/petugas', 'mdi mdi-account-switch', 1),
(30, 4, 'Berita', 'management/berita', 'mdi mdi-newspaper', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`cid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user_google`
--
ALTER TABLE `user_google`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_google`
--
ALTER TABLE `user_google`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
