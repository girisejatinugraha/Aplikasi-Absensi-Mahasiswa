-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2024 pada 10.49
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_absen`
--

CREATE TABLE `data_absen` (
  `id_absen` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_absen`
--

INSERT INTO `data_absen` (`id_absen`, `nama`, `tanggal`, `matkul`, `status`) VALUES
(26, 'galib', '2023-01-20', 'inggris', 'hadir'),
(28, 'giri', '2023-01-01', 'dasmen', 'hadir'),
(29, 'giri', '2023-01-01', 'alpro', 'hadir'),
(30, 'galib', '2023-01-15', 'dasmen', 'hadir'),
(31, 'giri', '2023-01-02', 'pemweb', 'hadir'),
(32, 'giri', '2023-01-03', 'pti', 'hadir'),
(33, 'giri', '2023-01-04', 'logmat', 'hadir'),
(34, 'giri', '2023-01-05', 'dasmen', 'hadir'),
(35, 'giri', '2023-01-15', 'ppa', 'hadir'),
(36, 'giri', '2023-01-16', 'inggris', 'hadir'),
(37, 'giri', '2023-01-17', 'logmat', 'hadir'),
(38, 'giri', '2023-01-18', 'pemweb', 'hadir'),
(39, 'giri', '2023-01-18', 'inggris', 'hadir'),
(40, 'giri', '2023-01-19', 'arkom', 'hadir'),
(41, 'giri', '2023-01-20', 'pemweb', 'hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `semester`) VALUES
(55555, 'galib', 'komputerisasi', '9'),
(123123, 'asdasd', 'asd', '4'),
(1234567, 'sejati', 'akuntansi', '2'),
(2222222, 'ismail', 'akuntansi', '3'),
(3333333, 'dina', 'akuntansi', '3'),
(22102222, 'agung', 'ifsi', '2'),
(22110143, 'Fachri umar', 'informatika', '2'),
(22110145, 'ega', 'informatika d3', 'ppa'),
(22110146, 'bagus', 'akuntansi', 'logmat'),
(22110322, 'contoh', 'akuntansi', '4'),
(22110329, 'giri', 'sistem informasi', '1'),
(221101111, 'ersa', 'komputerisasi', '5'),
(1222222222, 'apang', 'akuntansi', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nim` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `level`, `nim`) VALUES
('admin', 'admin123', 'admin', NULL),
('giri', 'giri123', 'mahasiswa', 22110329),
('isal', 'isal123', 'dosen', NULL),
('rajab', 'rajab123', 'dosen', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nama_3` (`nama`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nim_2` (`nim`),
  ADD KEY `nama` (`nama`),
  ADD KEY `nama_2` (`nama`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id_absen` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
