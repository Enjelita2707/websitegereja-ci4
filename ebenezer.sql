-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2024 pada 02.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebenezer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara_ibadah`
--

CREATE TABLE `acara_ibadah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `acara_ibadah`
--

INSERT INTO `acara_ibadah` (`id`, `judul`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'j', 'k', 'gambar1.jpeg', '2024-04-24 10:26:50', '2024-04-24 03:26:50'),
(2, 'Ibadah Umum', 'Ibadah', 'SURAT PERNYATAAN UKT_compressed.pdf', '2024-04-25 03:16:42', '2024-04-24 20:16:42'),
(3, 'kl', 'j', '1714020006_77f73a488ead83b58b3c.pdf', '2024-04-25 04:40:06', '2024-04-24 21:40:06'),
(4, 'k', 'l', '1714020066_7e2cbb1fde345dffc222.pdf', '2024-04-25 04:41:06', '2024-04-24 21:41:06'),
(5, 'w', 'w', '1714559585_41b436ff17ee384e5bed.jpg', '2024-05-01 10:33:05', '2024-05-01 03:33:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_kegiatan`, `tanggal`, `jam`) VALUES
(1, 'Ibadah SM', '2024-04-21', '07:30:00'),
(2, 'Ibadah Umum', '2024-04-26', '10:00:00'),
(3, 'Ibadah Keluarga', '2024-04-24', '19:30:00'),
(5, 'Acara Natal', '2024-04-26', '10:16:00'),
(6, 'gi', '2024-05-22', '17:46:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_donasi`
--

CREATE TABLE `tbl_donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `an` varchar(50) DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `jenis_donasi` varchar(10) DEFAULT NULL,
  `bukti` varchar(150) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal_ibadah`
--

CREATE TABLE `tbl_jadwal_ibadah` (
  `id_waktu` int(11) NOT NULL,
  `nama_ibadah` varchar(100) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jadwal_ibadah`
--

INSERT INTO `tbl_jadwal_ibadah` (`id_waktu`, `nama_ibadah`, `jam`) VALUES
(1, 'Ibadah Sekolah Minggu', '07:30:00'),
(3, 'Ibadah Umum', '10:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jemaat`
--

CREATE TABLE `tbl_jemaat` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jemaat`
--

INSERT INTO `tbl_jemaat` (`id_nama`, `nama`, `alamat`, `no_tlpn`, `email`, `tanggal_lahir`, `status`) VALUES
(1, 'Enjelita', 'Silaen', '082246942600', 'enjelitatampubolon27@gmail.com', '2024-04-01', 'Anak'),
(2, 'Agustin', 'Silaen', '082246942600', 'agus@gmail.com', '2024-04-06', 'Anak'),
(3, 'Enjelita Tampubolon', 'Si', '08', 'enj@gmail.com', '2024-04-06', 'a'),
(4, 'Enjelita Ernawati Kartika Tampubolon', 'si', '98', 'a@gmail.com', '2024-04-18', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kas_gereja`
--

CREATE TABLE `tbl_kas_gereja` (
  `id_kas` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `kas_masuk` int(11) DEFAULT NULL,
  `kas_keluar` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kas_gereja`
--

INSERT INTO `tbl_kas_gereja` (`id_kas`, `tanggal`, `ket`, `kas_masuk`, `kas_keluar`, `status`) VALUES
(3, '2024-04-09', 'Listrik', 0, 100000, 'Keluar'),
(4, '2024-04-08', 'Persembahan', 1000000, 0, 'Masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_p_pendeta`
--

CREATE TABLE `tbl_p_pendeta` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_p_pendeta`
--

INSERT INTO `tbl_p_pendeta` (`id`, `nama`, `jabatan`, `keterangan`, `foto`) VALUES
(5, 'Enj', 'we', 'we', 'gambar3.jpeg'),
(8, 'g', 'y', 'ghi', '2.jpg'),
(9, 'gk', 'vk', 'hk', 'gambar3.jpeg'),
(10, 'h', 'i', 'k', 'gambar5.jpeg'),
(11, 'k', 'bj', 'j', 'gambar1.jpeg'),
(12, 'j', 'j', 'j', '2.jpg'),
(13, 'w', 'q', 'q', '3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_gereja` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_gereja`, `kecamatan`, `alamat`) VALUES
(1, 'HKBP EBENEZER SILAEN', 'SILAEN', 'Jln. DI Panjaitan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'Enjelita', 'enjel@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara_ibadah`
--
ALTER TABLE `acara_ibadah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `tbl_jadwal_ibadah`
--
ALTER TABLE `tbl_jadwal_ibadah`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indeks untuk tabel `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indeks untuk tabel `tbl_kas_gereja`
--
ALTER TABLE `tbl_kas_gereja`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `tbl_p_pendeta`
--
ALTER TABLE `tbl_p_pendeta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acara_ibadah`
--
ALTER TABLE `acara_ibadah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal_ibadah`
--
ALTER TABLE `tbl_jadwal_ibadah`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kas_gereja`
--
ALTER TABLE `tbl_kas_gereja`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_p_pendeta`
--
ALTER TABLE `tbl_p_pendeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
