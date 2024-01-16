-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jan 2024 pada 10.30
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padahhmy_course`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id` int NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Email`, `Password`) VALUES
(3, 'coba', 'coba', 'coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `enroll`
--

CREATE TABLE `enroll` (
  `id` int NOT NULL,
  `Product_id` int NOT NULL,
  `users_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `Id` int NOT NULL,
  `Img` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Deskripsi` varchar(10638) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Yt` varchar(355) NOT NULL,
  `Durasi` varchar(255) NOT NULL,
  `Jadwal` varchar(150) NOT NULL,
  `Harga` varchar(255) NOT NULL,
  `Diskon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`Id`, `Img`, `Judul`, `Deskripsi`, `Yt`, `Durasi`, `Jadwal`, `Harga`, `Diskon`) VALUES
(40, 'adri.png', 'adri', 'Keuntungan Kursus :<br> Memiliki pemahaman mendasar tentang bahasa pemrograman Python.<br>  Mendapatkan keterampilan Python yang diperlukan untuk berpindah ke cabang tertentu - Pembelajaran Mesin, Ilmu Data, dll.<br>  Mampu dan dapat membuat program Python Anda sendiri.<br>  Memahami Python 2 dan Python 3.<br>  Memiliki keterampilan dan pemahaman tentang Python untuk melamar pekerjaan pemrograman Python.<br>  Menambahkan keterampilan Pemrograman Berorientasi Objek (OOP) Python ke resume Anda.<br>', 'adri', 'adri', 'adri', 'adri', 'adri'),
(41, '123.png', '123', 'teks1<br>teks2', 'as', 'asdasd', 'asd', 'asdadsa', 'ads'),
(42, 'asd.png', 'Fundamental C++', 'C++ Keren<BR>TES', 'https://www.youtube.com/embed/k69asKbo9Ms?si=EH2n6kU7X8VYtO-4', '2 Bulan', '14 Februari', '3.500.000', '2.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `Id` int NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`) VALUES
(1, 'coba1', 'coba1', 'coba1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `enroll`
--
ALTER TABLE `enroll`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
