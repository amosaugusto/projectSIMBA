-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 05:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsimba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bimbingan`
--

CREATE TABLE `tb_bimbingan` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nim` varchar(120) NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `topik` varchar(256) NOT NULL,
  `dospem` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bimbingan`
--

INSERT INTO `tb_bimbingan` (`id`, `nama`, `nim`, `tgl_bimbingan`, `topik`, `dospem`) VALUES
(1, 'Anros Monica Hutagalung', '00000034848', '2023-01-20', 'Menyusun rencana studi untuk semester 5', 'Rudi Sutomo'),
(4, 'Amos Augusto Silangit', '09021281924051', '2023-01-25', 'Cara bermain valorant dengan baik', 'Abdiansah'),
(5, 'Josie GF Purba', '09021281924090', '2023-02-15', 'Bimbingan Akademik', 'Rudi Sutomo'),
(6, 'monica', '00000034848', '2023-01-20', 'revisi laporan', 'Rudi Sutomo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buatjadwal`
--

CREATE TABLE `tb_buatjadwal` (
  `id` int(11) NOT NULL,
  `jenis` varchar(120) NOT NULL,
  `lokasi` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `dospem` varchar(120) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `mahasiswa` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buatjadwal`
--

INSERT INTO `tb_buatjadwal` (`id`, `jenis`, `lokasi`, `link`, `tgl_bimbingan`, `dospem`, `angkatan`, `mahasiswa`) VALUES
(3, 'online', 'UMN ruang 1', '-', '2023-01-31', 'Abdiansah', 2019, 'Anros Monica Hutagalung'),
(4, 'offline', '-', 'https://www.w3.org/Provider/Style/dummy.html', '0000-00-00', 'Abdiansah', 2016, '-'),
(5, 'online', 'rumah monik', '-', '2023-01-27', 'Rudi Sutomo', 2019, 'Josie GF Purba'),
(6, 'online', '-', 'https://www.w3.org/Provider/Style/dummy.html', '2023-01-23', 'Rudi Sutomo', 2021, '-'),
(7, 'online', '-', 'https://www.w3.org/Provider/Style/dummy.html', '2023-01-21', 'Rudi Sutomo', 2019, '-'),
(8, 'offline', 'UMN ruang 1', '-', '2023-01-21', 'Rudi Sutomo', 2019, 'Anros Monica Hutagalung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catat`
--

CREATE TABLE `tb_catat` (
  `id` int(11) NOT NULL,
  `jenis` varchar(120) NOT NULL,
  `lokasi` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `topik` varchar(256) NOT NULL,
  `feedback` varchar(256) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `mahasiswa` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_catat`
--

INSERT INTO `tb_catat` (`id`, `jenis`, `lokasi`, `link`, `tgl_bimbingan`, `topik`, `feedback`, `angkatan`, `mahasiswa`) VALUES
(1, 'online', 'UMN ruang 1', '-', '2023-01-31', 'Magang', 'Tambahkan latar belakang', 2019, 'Anros Monica Hutagalung'),
(2, 'online', 'rumah monik', '-', '2023-01-27', 'Bimbingan Akademik', 'Ambil KRS', 2019, 'Josie GF Purba');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nomorinduk` varchar(25) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nomorinduk`, `name`, `email`, `image`, `password`, `angkatan`, `jumlah`, `role_id`, `is_active`, `date_created`) VALUES
(5, '0', 'Macullar Gaming', 'macullar17@gmail.com', 'golden-monogram-letter-m-free-vector1.jpg', '$2y$10$h6r/W268f4MZ2SaSf5Mzlu/Nx1g5qxo/WPu64n3x8wymgJwinKxum', 0, 0, 2, 1, 1635337743),
(6, '0', 'Amos Augusto Silangit', 'amosilangit@gmail.com', '5c7b75aa754d941afc4133ee87758bf6--writing-prompts-good-things.jpg', '$2y$10$k6TIx2xxxRjvwndQdaFXK.qUIYJCK4Jy8oDE/sPKk9k6MvIdGxbZ6', 0, 0, 1, 1, 1635341124),
(9, '0', 'Artisan', 'artisanresidence@gmail.com', 'default.jpg', '$2y$10$lCGI02rqNP8dbAe0Jrqxz.TiEwwBtseFjqtgQXxBnYAki09E9U25K', 0, 0, 2, 0, 1637034504),
(10, '0', 'Amos Augusto Silangit', 'amosaugustos@gmail.com', 'default.jpg', '$2y$10$eDt/b/Emb7P1C0sE8R0s.uOmZb3agYbZiFQblZ7uVuPgDWMo11LqC', 0, 0, 2, 1, 1672301590),
(11, '860968', 'Ahmad Faza', 'ahmad.faza@umn.ac.id', 'default.jpg', '$2y$10$zb6R/iVkaPfvK3BJiLNB.OhmbgCl51ATX3t6OpuVGq/2.3McLioJ.', 0, 0, 3, 1, 1672304529),
(12, '00000003593', 'Felix Ronaldi', 'felix.ronaldi@student.umn.ac.id', 'default.jpg', '$2y$10$ERG5m.7t11/7V/WL4943QefF6i1wScDf65mH/rAVDK5tOK0YZBO1G', 2018, 0, 2, 1, 1672408189),
(13, '679406', 'Rudi Sutomo', 'rudi.sutomo@umn.ac.id', 'default.jpg', '$2y$10$pUefGOhxC6bhHEkfl9xjWOR4.lyqvPXdUb7Mnh22ujvlGEqkO2Th.', 0, 0, 3, 1, 1672634303),
(14, '0', 'admin', 'admin@umn.ac.id', 'default.jpg', '$2y$10$i6fiOgpysVwV03VRVpIc/eLAO2V1k5e7dTRtxW4FK..kJNE72y2I6', 0, 0, 1, 1, 1672720443),
(15, '00000034848', 'Anros Monica Hutagalung', 'anros.monica@student.umn.ac.id', 'default.jpg', '$2y$10$AVCXkn1gQDLg/IEx7Ty6Xuc1.4tPP1nY11z6JxLPTNAHGkyokQCmu', 2019, 0, 2, 1, 1672902206);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(8, 1, 3),
(9, 1, 2),
(12, 2, 4),
(15, 3, 2),
(17, 3, 5),
(18, 1, 4),
(19, 1, 5),
(21, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Home'),
(5, 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Mahasiswa'),
(3, 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(20, 4, 'SIMBA', 'home/indexlogged', 'fas fa-building', 1),
(21, 1, 'SIMBA (prodi)', 'home/indexprodi', 'fas fa-building', 1),
(26, 5, 'SIMBA (dosen)', 'home/indexdosen', 'fas fa-building', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buatjadwal`
--
ALTER TABLE `tb_buatjadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_catat`
--
ALTER TABLE `tb_catat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_buatjadwal`
--
ALTER TABLE `tb_buatjadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_catat`
--
ALTER TABLE `tb_catat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
