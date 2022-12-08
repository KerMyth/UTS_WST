-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Okt 2022 pada 07.36
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `statusBlog` enum('Aktif','Tidak Aktif') NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`idBlog`, `idUser`, `title`, `body`, `statusBlog`, `createdAt`, `updatedAt`) VALUES
(2, 1, 'testing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate necessitatibus reiciendis culpa amet explicabo! Animi, nostrum amet! Possimus, hic alias unde temporibus sint nemo voluptas velit ipsum officiis veniam accusamus neque quasi beatae magnam, ad ipsam dolorem perspiciatis vero excepturi quaerat odit repudiandae natus. Illum aperiam dicta quod laborum doloribus sequi magni? Tenetur quisquam veritatis, repellendus dolore quia nostrum reiciendis? Esse necessitatibus atque quisquam autem, facilis harum labore, voluptatem consequatur deleniti molestias perspiciatis? Inventore dolore laborum ducimus repellendus non earum explicabo optio quia illum similique rerum nisi qui possimus ex maxime voluptate ipsam, amet vel cumque! Vitae asperiores nobis deserunt.', 'Aktif', '2022-08-30 09:59:25', '2022-08-30 10:24:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `idLogAktivitas` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `aktivitas` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`idLogAktivitas`, `userName`, `aktivitas`, `waktu`) VALUES
(1, 'admin', 'Berhasil Login', '2022-08-30 10:47:25'),
(2, 'admin', 'Berhasil Logout', '2022-08-30 10:49:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `levelUser` enum('Admin','Member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `userName`, `pass`, `levelUser`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(49, 'Alfian', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`idLogAktivitas`),
  ADD KEY `userName` (`userName`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `idLogAktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
