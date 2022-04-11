-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2021 pada 15.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smamutiara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `kode_absen` int(11) NOT NULL,
  `tgl_absen` datetime NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `kehadiran` enum('Sakit','Izin','Tanpa Keterangan','Hadir') NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`kode_absen`, `tgl_absen`, `id_siswa`, `kode_guru`, `kode_mapel`, `kehadiran`, `deskripsi`, `kode_tahun_akademik`) VALUES
(1, '2021-06-01 08:03:42', 1, 1, 'MP101', 'Sakit', 'Telah Hadir Mata Pelajaran Bahasa Indonesia', 1),
(2, '2021-06-01 08:08:30', 18, 1, 'MP101', 'Sakit', 'Telah Hadir Mata Pelajaran Bahasa Indonesia', 1),
(3, '2021-06-02 15:08:42', 1, 1, 'MP101', 'Sakit', 'Bahasa Indonesia Hadir', 1),
(4, '2021-06-02 15:14:16', 1, 1, 'MP101', 'Sakit', 'Telah Hadir Mata Pelajaran Bahasa Indonesia', 1),
(5, '2021-06-02 17:07:32', 1, 2, 'MP117', 'Izin', 'Hadir Bahasa Indonesia', 1),
(6, '2021-06-11 15:38:28', 18, 2, 'MP117', 'Tanpa Keterangan', 'Alfa terus', 1),
(7, '2021-06-01 00:40:36', 18, 1, 'MP106', 'Tanpa Keterangan', 'Hadir gan', 1),
(8, '2021-06-20 09:08:36', 1, 1, 'MP103', 'Izin', 'Izin ', 1),
(9, '2021-06-20 09:45:41', 1, 1, 'MP101', 'Sakit', 'Sakit ', 2),
(10, '2021-06-20 12:17:00', 1, 1, 'MP101', 'Sakit', 'Sakit ya', 2),
(11, '2021-06-28 09:53:35', 1, 1, 'MP101', 'Hadir', 'hadir', 1),
(12, '2021-06-28 10:40:58', 1, 1, 'MP101', 'Hadir', 'Mantap', 1),
(13, '2021-06-28 10:41:57', 1, 1, 'MP101', 'Hadir', 'Mantap', 1),
(14, '2021-06-28 10:47:55', 1, 1, 'MP103', 'Hadir', 'Mantap', 1),
(15, '2021-07-29 19:14:15', 51, 1, 'MP101', 'Hadir', 'Mantep Login', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_extrakulikuler`
--

CREATE TABLE `tb_extrakulikuler` (
  `kode_nilai_extra` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kegiatan_ekstrakulikuler` varchar(20) NOT NULL,
  `predikat` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_extrakulikuler`
--

INSERT INTO `tb_extrakulikuler` (`kode_nilai_extra`, `id_siswa`, `kegiatan_ekstrakulikuler`, `predikat`, `keterangan`, `kode_tahun_akademik`) VALUES
(6, 1, 'Japanese Club', 'A', 'Wibu God', 1),
(7, 1, 'Pramuka', 'A', 'BAIK', 1),
(8, 1, 'Bahasa Jepang', 'A', 'Wih Wibu', 1),
(9, 18, 'English Club', 'A', 'Mantep', 1),
(10, 18, 'Japanese Club', 'A', 'Wibu Anjing', 1),
(11, 1, 'Coding Club', 'A', 'Mantap Kang Ngoding', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nip` int(11) NOT NULL,
  `alamat_guru` varchar(50) NOT NULL,
  `telp_guru` varchar(20) NOT NULL,
  `foto_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `nip`, `alamat_guru`, `telp_guru`, `foto_guru`) VALUES
(1, 'Kiki Kurniasih', 0, 'Kp.Rawa Sari', '085157848498', '60b70d972268d.png'),
(2, 'Aldilla Wedar Octara', 0, 'Kp.Nagreg', '085151545757', '60b70dbd548c5.png'),
(3, 'Runi Setiyowati', 0, 'Kp.Rawa Sari', '085154578481', '60b70de21e5c5.png'),
(4, 'Annisa Resti', 0, 'Kp.rawa belitung', '085154878418', '60b70e0694b53.png'),
(5, 'Shifa Nur Fadillah', 0, 'Kp.Rawa Asem', '085154578187', '60b70e23bb066.png'),
(6, 'Annisa Nur Rizka', 0, 'Kp.Teureup', '085154578487', '60b70f0c9d4f7.png'),
(7, 'Mardiah', 0, 'Cikupa Mas', '085151548787', '60b70f304cfe2.png'),
(8, 'Indah Dwi Tantina', 0, 'Kp. Karang Asem', '085151578188', '60b70fa236e6c.png'),
(9, 'Marianty Siregar', 0, 'Kp. Terureup', '082211548948', '60b70fcaad32a.png'),
(10, 'M.Mukrom', 0, 'Perumahan Taman Raya Rajeg', '085154578487', '60b71008b0807.png'),
(11, 'Hanna Aulia', 0, 'Perumahan Rajeg Asri', '085157487848', '60b7103047cfd.png'),
(12, 'Zakiyatun Nufus', 0, 'Perumahan Taman Walet', '085154578187', '60b71047a4bbf.png'),
(13, 'Muhammad Alfian Gustira', 0, 'Perumahan Kotabumi 6', '082211454578', '60b71092a7bb8.png'),
(14, 'Wiwid Ida', 0, 'Perumahan Lagoona ', '085121548784', '60b710b984fc0.png'),
(15, 'Nupung H. Surbakti', 0, 'Pasar Kemis', '085157848787', '60b710db4473e.png'),
(16, 'Nabila Nur Baiti', 0, 'Pasar Lama', '085121545787', '60b710f705ac6.png'),
(17, 'Junairoh Kestiani', 0, 'Perumahan Cipondoh', '085121578487', '60b71118cab5a.png'),
(19, 'Azka', 2147483647, 'Kp.Nagreg Rt/RW : 09/02', '085124574478', '6135b80c9d0be.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_mapel`
--

CREATE TABLE `tb_jadwal_mapel` (
  `kode_jadwal` int(11) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal_mapel`
--

INSERT INTO `tb_jadwal_mapel` (`kode_jadwal`, `kode_kelas`, `kode_mapel`, `kode_guru`, `jam_mulai`, `jam_selesai`, `hari`) VALUES
(1, 37, 'MP101', 1, '08:00:00', '09:00:00', 'Senin'),
(2, 36, 'MP103', 1, '09:00:00', '10:00:00', 'Senin'),
(3, 36, 'MP117', 2, '08:00:00', '09:00:00', 'Selasa'),
(4, 37, 'MP105', 2, '09:00:00', '10:00:00', 'Rabu'),
(5, 38, 'MP116', 2, '09:00:00', '10:00:00', 'Rabu'),
(6, 40, 'MP118', 1, '08:00:00', '09:00:00', 'Sabtu'),
(7, 36, 'MP109', 1, '09:00:00', '10:00:00', 'Rabu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kode_kelas` int(11) NOT NULL,
  `kode_ruangan` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `kode_ruangan`, `nama_kelas`) VALUES
(36, 'R001', 'X MIPA 1'),
(37, 'R001', 'X MIPA 2'),
(38, 'R002', 'X IIS 1'),
(39, 'R002', 'X IIS 2'),
(40, 'R001', 'XII MIPA 1'),
(41, 'R002', 'XII MIPA 2'),
(42, 'R002', 'XII IIS 1'),
(43, 'R002', 'XII IIS 2'),
(44, 'R002', 'XII MIPA 1'),
(50, 'R002', 'XII MIPA 2'),
(51, 'R001', 'XII MIPA 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kode_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `tingkat` enum('1(SMA)','2(SMA)','3(SMA)','') NOT NULL,
  `jurusan` enum('MIPA','IIS','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`kode_mapel`, `nama_mapel`, `tingkat`, `jurusan`) VALUES
('MP101', 'Bahasa Indonesia', '1(SMA)', 'MIPA'),
('MP102', 'Pendidikan Agama dan Budi Pekerti', '1(SMA)', 'MIPA'),
('MP103', 'Matematika', '1(SMA)', 'MIPA'),
('MP104', 'Pendidikan Pancasila dan Kewarganegaraan', '1(SMA)', 'MIPA'),
('MP105', 'Bahasa Jepang', '1(SMA)', 'MIPA'),
('MP106', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '1(SMA)', 'MIPA'),
('MP107', 'Sejarah Peminatan', '1(SMA)', 'MIPA'),
('MP108', 'Seni Budaya', '1(SMA)', 'MIPA'),
('MP109', 'Biologi', '1(SMA)', 'MIPA'),
('MP110', 'Bahasa Inggris', '1(SMA)', 'MIPA'),
('MP111', 'Prakarya', '1(SMA)', 'MIPA'),
('MP112', 'Sejarah Indonesia', '1(SMA)', 'MIPA'),
('MP113', 'Kimia', '1(SMA)', 'MIPA'),
('MP114', 'Informatika', '1(SMA)', 'MIPA'),
('MP115', 'Fisika', '1(SMA)', 'MIPA'),
('MP116', 'Ekonomi', '1(SMA)', 'MIPA'),
('MP117', 'Bahasa Indonesia', '1(SMA)', 'IIS'),
('MP118', 'Pendidikan Agama dan Budi Pekerti', '1(SMA)', 'IIS'),
('MP119', 'Matematika', '1(SMA)', 'IIS'),
('MP120', 'Pendidikan Pancasila dan Kewarganegaraan', '1(SMA)', 'IIS'),
('MP121', 'Matematika', '1(SMA)', 'IIS'),
('MP122', 'Bahasa Jepang', '1(SMA)', 'IIS'),
('MP123', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', '1(SMA)', 'IIS'),
('MP124', 'Sejarah Peminatan', '1(SMA)', 'IIS'),
('MP125', 'Seni Budaya', '1(SMA)', 'IIS'),
('MP126', 'Biologi', '1(SMA)', 'IIS'),
('MP127', 'Biologi', '1(SMA)', 'IIS'),
('MP128', 'Bahasa Inggris', '1(SMA)', 'IIS'),
('MP129', 'Prakarya', '1(SMA)', 'IIS'),
('MP130', 'Sejarah Indonesia', '1(SMA)', 'IIS'),
('MP131', 'Sosiologi', '1(SMA)', 'IIS'),
('MP132', 'Karya Sastra', '3(SMA)', 'IIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_keterampilan`
--

CREATE TABLE `tb_nilai_keterampilan` (
  `id_nilai_keterampilan` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_keterampilan` int(20) NOT NULL,
  `grade_keterampilan` varchar(10) NOT NULL,
  `deskripsi_keterampilan` varchar(100) NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai_keterampilan`
--

INSERT INTO `tb_nilai_keterampilan` (`id_nilai_keterampilan`, `kode_mapel`, `kode_guru`, `id_siswa`, `nilai_keterampilan`, `grade_keterampilan`, `deskripsi_keterampilan`, `kode_tahun_akademik`) VALUES
(1, 'MP101', 1, 1, 100, 'A', 'Mantep GG zis keterampilannya ', 1),
(2, 'MP102', 2, 1, 100, 'A', 'Beuh setrese pinter amat', 1),
(3, 'MP103', 3, 1, 100, 'A', 'Beuh jago MTK', 1),
(4, 'MP104', 4, 1, 100, 'A', 'Beuh GG ', 1),
(5, 'MP105', 5, 1, 100, 'A', 'Hih Wibu', 1),
(6, 'MP106', 6, 1, 100, 'A', 'GG GEMING', 1),
(7, 'MP107', 7, 1, 100, 'A', 'Jago jd kiper zis?', 1),
(8, 'MP108', 8, 1, 100, 'A', 'Beuh GG senbudnya', 1),
(9, 'MP109', 9, 1, 100, 'A', 'Beuh Setres', 1),
(10, 'MP110', 10, 1, 100, 'A', 'Jago Inggris? kuy ngadi', 1),
(11, 'MP111', 11, 1, 100, 'A', 'Beuh jago kuli juga lu zis', 1),
(12, 'MP101', 1, 18, 91, 'A', 'Test 2', 1),
(13, 'MP101', 1, 1, 75, 'C', 'Mantap Azis Ganteng', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_mapel`
--

CREATE TABLE `tb_nilai_mapel` (
  `id_nilai_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_mapel` int(11) NOT NULL,
  `grade_mapel` varchar(20) NOT NULL,
  `deskripsi_mapel` varchar(100) NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai_mapel`
--

INSERT INTO `tb_nilai_mapel` (`id_nilai_mapel`, `kode_mapel`, `kode_guru`, `id_siswa`, `nilai_mapel`, `grade_mapel`, `deskripsi_mapel`, `kode_tahun_akademik`) VALUES
(1, 'MP101', 1, 1, 100, 'A', 'Mantap selalu zis', 1),
(2, 'MP102', 2, 1, 100, 'A', 'mantap zis ganteng', 1),
(3, 'MP103', 3, 1, 100, 'A', 'Gud zis', 1),
(4, 'MP104', 4, 1, 100, 'A', 'Gud', 1),
(5, 'MP105', 5, 1, 100, 'A', '100', 1),
(6, 'MP106', 6, 1, 100, 'A', 'Mantap Beut dah ganteng', 1),
(7, 'MP107', 7, 1, 100, 'A', 'Mantap Azis Ganteng Banget', 1),
(8, 'MP108', 8, 1, 100, 'A', 'Mantap Zis Jago', 1),
(9, 'MP109', 9, 1, 100, 'A', 'Mantap Jago biologi', 1),
(10, 'MP110', 10, 1, 100, 'A', 'Mantep Beut dah azis', 1),
(11, 'MP111', 11, 1, 100, 'A', 'jago jd kuli', 1),
(12, 'MP101', 1, 18, 100, 'A', 'Gud', 1),
(13, 'MP101', 1, 1, 100, 'A', 'sdada', 1),
(14, 'MP101', 1, 1, 80, 'C', 'Alhamdulillah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_raport`
--

CREATE TABLE `tb_nilai_raport` (
  `kode_nilai_raport` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_nilai_mapel` int(11) NOT NULL,
  `id_nilai_keterampilan` int(11) NOT NULL,
  `nama_kel_mapel` enum('Kelompok Umum (A)','Kelompok Umum (B)','Kelompok Umum (C)','Lintas Minat (D)') NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai_raport`
--

INSERT INTO `tb_nilai_raport` (`kode_nilai_raport`, `id_siswa`, `id_nilai_mapel`, `id_nilai_keterampilan`, `nama_kel_mapel`, `kode_tahun_akademik`) VALUES
(1, 1, 1, 1, 'Kelompok Umum (A)', 1),
(2, 1, 2, 2, 'Kelompok Umum (A)', 1),
(3, 1, 3, 3, 'Kelompok Umum (A)', 1),
(4, 1, 4, 4, 'Kelompok Umum (A)', 1),
(5, 1, 5, 5, 'Kelompok Umum (B)', 1),
(6, 1, 6, 6, 'Kelompok Umum (B)', 1),
(7, 1, 7, 7, 'Kelompok Umum (B)', 1),
(8, 1, 8, 8, 'Kelompok Umum (C)', 1),
(9, 1, 9, 9, 'Kelompok Umum (C)', 1),
(10, 1, 10, 10, 'Lintas Minat (D)', 1),
(11, 1, 11, 11, 'Lintas Minat (D)', 1),
(12, 18, 12, 12, 'Kelompok Umum (A)', 1),
(13, 1, 14, 13, 'Kelompok Umum (A)', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `kode_ruangan` varchar(20) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`kode_ruangan`, `nama_ruangan`) VALUES
('R001', 'A.1'),
('R002', 'A.2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sikap`
--

CREATE TABLE `tb_sikap` (
  `kode_sikap` int(11) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `predikat` varchar(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sikap`
--

INSERT INTO `tb_sikap` (`kode_sikap`, `kode_guru`, `id_siswa`, `predikat`, `deskripsi`, `kode_tahun_akademik`) VALUES
(2, 1, 18, 'A', 'Gud', 1),
(4, 1, 1, 'A+', 'Test Nilai Sikap Spiritual Siswa Genap ya azis', 2),
(5, 1, 1, 'A+', 'sholatnya jangan lupa zis :)', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sikap_sosial`
--

CREATE TABLE `tb_sikap_sosial` (
  `kode_sikap_sosial` int(11) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `predikat` varchar(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kode_tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sikap_sosial`
--

INSERT INTO `tb_sikap_sosial` (`kode_sikap_sosial`, `kode_guru`, `id_siswa`, `predikat`, `deskripsi`, `kode_tahun_akademik`) VALUES
(1, 1, 1, 'A', 'GG GEMING', 1),
(2, 1, 18, 'A', 'Gud', 1),
(3, 1, 1, 'A+', 'Test zis buat sikap sosial ubah genap', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `jurusan` enum('MIPA','IIS','','') NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `agama` enum('islam','kristen','hindu','buddha','konghucu','protestan','katolik') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `kode_kelas`, `nisn`, `jurusan`, `nama_siswa`, `tgl_lahir`, `kelamin`, `tempat_lahir`, `agama`, `no_hp`, `email`, `foto_siswa`) VALUES
(1, 36, '199913138918', 'MIPA', 'Azis Maulana', '1999-03-23', 'laki-laki', 'Kebumen', 'islam', '085154818848', 'azis.maulana@raharja.info', '60d9b3db335ca.jpg'),
(18, 36, '19992812913819', 'MIPA', 'Abdi Prayogi', '2002-04-23', 'laki-laki', 'Tangerang', 'islam', '085471365954', 'abdiprayogi@gmail.com', '608fcb8644bf0.png'),
(19, 36, '199832932394', 'MIPA', 'Amanda Fikri', '2005-01-24', 'laki-laki', 'Tangerang', 'islam', '08546958745', 'amandafikri@gmail.com', '608fc5a3bbbb7.png'),
(20, 36, '199928283283', 'MIPA', 'Ahmad Dzakiy Muharam', '2005-01-01', 'laki-laki', 'Tulung Agung', 'islam', '085419678594', 'ahmad.d.muharam@gmail.com', '608fc75890f81.png'),
(21, 36, '199928283282', 'MIPA', 'Alysya Jasmin', '2002-02-24', 'perempuan', 'Tangerang', 'kristen', '085479632568', 'alysya.jasmin@gmail.com', '608fc91793778.png'),
(22, 36, '199994678728', 'MIPA', 'Amelia Putri Ramadhani', '2004-09-09', 'perempuan', 'Tangerang', 'islam', '085451515151', 'ameliaputri23@gmail.com', '608fcd18b3c1a.png'),
(23, 36, '199942923293', 'MIPA', 'ANGELLIA FITRIANI RIZQILLAH PURNOMO', '2004-04-04', 'laki-laki', 'Tangerang', 'islam', '085748481848', 'angeliafitriani@gmail.com', '608fcd824adb5.png'),
(24, 36, '199942132142', 'MIPA', 'ANGGITO ABIMANYU', '2004-03-03', 'laki-laki', 'Tangerang', 'islam', '085478964578', 'anggitoabimanyu@gmail.com', '608fceba6b032.png'),
(25, 36, '199954878784', 'MIPA', 'APRILIA CARISA RENATA', '2004-04-03', 'perempuan', 'Tangerang', 'kristen', '085154878489', 'aprilicarisarenata@gmail.com', '608fcf251bfbd.png'),
(26, 36, '199985487485', 'MIPA', 'ARIEL PUTRA SETIAWAN', '2004-04-04', 'laki-laki', 'Tangerang', 'kristen', '085487841875', 'arielputrasetiawan@gmail.com', '608fcf8683c0f.png'),
(27, 36, '178545487848', 'MIPA', 'AZIZAH RAHMAH', '2002-04-23', 'perempuan', 'Tangerang', 'islam', '085154578488', 'azizahrhmah@gmail.com', '6090c93503aec.png'),
(28, 36, '199984878418', 'MIPA', 'ENGGA ANGGRAENI', '2002-04-23', 'perempuan', 'Tangerang', 'hindu', '085188484878', 'enggaanggraeni@gmail.com', '6090ca6c626eb.png'),
(29, 36, '199984848787', 'MIPA', 'FANY NURHAYATI', '2003-03-03', 'perempuan', 'Tangerang', 'buddha', '085151545487', 'fanynurhayati@gmail.com', '6090cbacb9600.png'),
(30, 36, '199948487874', 'MIPA', 'FIKHI MAULANA', '2003-09-04', 'laki-laki', 'Tangerang', 'islam', '085184878418', 'fikihmaulana@gmail.com', '6090cc7d11cd0.png'),
(31, 36, '199984878784', 'MIPA', 'GILBY DA VINCI', '2005-07-23', 'laki-laki', 'Tangerang', 'konghucu', '085878488784', 'gilby@gmail.com', '6090cdc605080.png'),
(32, 36, '199984878488', 'MIPA', 'GUNAWAN CHANDRA KUSUMA', '2004-04-23', 'laki-laki', 'Tangerang', 'buddha', '085154578487', 'gunawan23@gmail.com', '6090d0192bc82.png'),
(33, 36, '198487874887', 'MIPA', 'HUGGO RAYYAN RIVANDIRA', '2006-01-23', 'laki-laki', 'Tangerang', 'hindu', '085474818748', 'huggo@gmail.com', '6090d1394259a.png'),
(34, 36, '199984878787', 'MIPA', 'INDAH SALSABILA', '2001-04-21', 'perempuan', 'Tangerang', 'kristen', '085154548788', 'indah.s@gmail.com', '6090d5bb6e04d.png'),
(35, 36, '199984878488', 'MIPA', 'INDRI SASMIHA DAMAYANTI', '2002-04-21', 'perempuan', 'Kebumen', 'islam', '085154578787', 'indri.sasmitha@gmail.com', '6090d853eec8a.png'),
(36, 36, '199984878418', 'MIPA', 'INDRI TRIANA NUR RAHAYU', '2003-04-23', 'perempuan', 'Kebumen', 'islam', '085474154878', 'indri.rahayu@gmail.com', '6090d8dba8155.png'),
(37, 36, '199984878487', 'MIPA', 'IRMA TRIANA NUR RAHAYU', '2004-04-03', 'perempuan', 'Kebumen', 'islam', '085125645757', 'irma.triana@gmail.com', '60924667dac72.png'),
(38, 36, '199984878784', 'MIPA', 'JOHANES ADEM REYNARA', '2004-04-08', 'laki-laki', 'Kebumen', 'kristen', '085157457898', 'johanes23@gmail.com', '609246cbae1d7.png'),
(39, 36, '199984878487', 'MIPA', 'JOISA AVILOVA CHRISTY', '2004-02-03', 'perempuan', 'Ketapang', 'kristen', '085154574848', 'jovisa@gmail.com', '6092470ceefc9.png'),
(40, 36, '199984878487', 'MIPA', 'KAMILA NUR ARIIKAH', '2003-04-03', 'laki-laki', 'Terenggaleng', 'islam', '081244878784', 'kamila244@gmail.com', '60924749b4478.png'),
(41, 36, '199984878487', 'MIPA', 'KHAYLILA AMANDA PUTRI', '2005-04-02', 'perempuan', 'Yogyakarta', 'islam', '085154578787', 'khaylila@gmail.com', '6092479d02d40.png'),
(42, 36, '199984878488', 'MIPA', 'LEO JUAN ROMINO', '2005-01-23', 'laki-laki', 'Kebumen', 'hindu', '081215485748', 'leo@gmail.com', '60924818bee2b.png'),
(43, 36, '199984878487', 'MIPA', 'MEIKA DWI PANGESTU', '2001-02-03', 'perempuan', 'Kebumen', 'islam', '085154575154', 'meika244@gmail.com', '6092498754f36.png'),
(44, 36, '199984878487', 'MIPA', 'NABILA', '2004-12-03', 'perempuan', 'Kebumen', 'islam', '085185487878', 'nabila14402@gmail.com', '609249e4eb3c3.png'),
(45, 36, '199984874352', 'MIPA', 'NABILA FITRIANI', '2002-02-03', 'perempuan', 'Anyar', 'islam', '085454157415', 'nabilafitrian@gmail.com', '60924ab97f977.png'),
(46, 36, '199984874878', 'MIPA', 'NASWA AULIA PUTRI', '2002-02-23', 'perempuan', 'Kebumen', 'islam', '085475487848', 'naswaaulia@gmail.com', '609265169018d.png'),
(47, 36, '199984878487', 'MIPA', 'NAZIRA AZ-ZAHRA', '2005-05-23', 'perempuan', 'Keraton', 'islam', '085123648548', 'nazira23@gmal.com', '6092654ae6e37.png'),
(48, 36, '199984878487', 'MIPA', 'RUVI CESAR AGUSTIN', '2004-04-21', 'laki-laki', 'Tangerang', 'kristen', '082145487848', 'ruvii24@gmail.com', '6092657c090cb.png'),
(49, 36, '199984878487', 'MIPA', 'SERENA INDRIANI', '2002-02-21', 'perempuan', 'Tangerang', 'islam', '085214698754', 'serena.indriani23@gmail.com', '609265a9b4246.png'),
(50, 36, '199984874878', 'MIPA', 'SHILDA PUTRI SHAIFA', '2006-01-23', 'perempuan', 'Tangerang', 'islam', '085478487878', 'shilda.putri@gmail.com', '609265d9799fb.png'),
(51, 37, '199987454678', 'MIPA', 'VICO ARTETA', '2002-02-21', 'laki-laki', 'Tangerang', 'islam', '085121545787', 'vico23@gmail.com', '60926631bf10a.png'),
(52, 37, '199984871574', 'MIPA', 'WIDAN TINI OKTAFIANI', '2005-05-23', 'perempuan', 'Tangerang', 'islam', '082145487848', 'widan.tini@gmail.com', '60926691e6698.png'),
(53, 38, '199984874887', 'IIS', 'ADINDA USNIYAH', '2001-02-03', 'laki-laki', 'Kebumen', 'islam', '085254574878', 'adindausniyah23@gmail.com', '609267381890b.png'),
(54, 38, '199984871248', 'IIS', 'ADITYA DEYIKIE HANGGARA', '2002-02-03', 'laki-laki', 'Tangerang', 'islam', '085214548781', 'aditya.dey@gmail.com', '60936d7576e18.png'),
(55, 38, '199984871575', 'IIS', 'ALDRISNA NURINGTYAS YATAYUKTI', '2005-05-03', 'perempuan', 'Tangerang', 'islam', '085157468987', 'aldrisnya@gmail.com', '60936dd9447b9.png'),
(56, 38, '199984878124', 'IIS', 'ALIF IRHAM PRASOJO', '2004-04-24', 'laki-laki', 'Tangerang', 'islam', '085214548741', 'alifihram23@gmail.com', '60937654ba896.png'),
(57, 38, '199984878545', 'IIS', 'ALYA PUTRI AZZAHRA', '2001-01-23', 'perempuan', 'Tangerang', 'islam', '088845754187', 'alya@gmail.com', '6093767d7c182.png'),
(58, 38, '199984878418', 'IIS', 'ANDHIKA PUTRA PRATAMA', '2002-08-06', 'laki-laki', 'Tangerang', 'islam', '085457848787', 'andhikaputra@gmail.com', '609376aecfb02.png'),
(59, 38, '199984524157', 'IIS', 'ANDIKA MAULANA APRILIAN', '2002-02-03', 'laki-laki', 'Kebumen', 'islam', '085125647568', 'andika.maulana@gmail.com', '609376e17b104.png'),
(60, 38, '199945231547', 'IIS', 'ATTHIYA PUTRI SALSABILA', '2002-02-03', 'perempuan', 'Kebumen', 'islam', '085147646846', 'atthiya@gmail.com', '6093770b363c5.png'),
(61, 38, '199984256484', 'IIS', 'AZHARA NUR AFIFAH ARYANTI', '2001-02-03', 'laki-laki', 'Tangerang', 'islam', '085215154548', 'azahra.nur@gmail.com', '609377539f2eb.png'),
(62, 38, '199948784878', 'IIS', 'AZZAHRA RORO AMANDA', '2001-02-03', 'perempuan', 'Tangerang', 'islam', '082214568481', 'azzahra.roro@gmail.com', '60937782411e0.png'),
(63, 38, '199984878152', 'IIS', 'BUNGA DINA ADHA AMALIA', '2005-02-03', 'perempuan', 'Tangerang', 'islam', '087848784887', 'bunga.dina23@gmail.com', '609377bd6f112.png'),
(64, 38, '199984871268', 'IIS', 'CINDY ANGGRAINI', '2002-02-03', 'perempuan', 'Tangerang', 'kristen', '082211454878', 'cindy.23@gmail.com', '609377f3b877e.png'),
(65, 0, '199984235487', 'IIS', 'DHIKA FRISKI SETIYAWAN', '2006-03-23', 'laki-laki', 'Tangerang', 'kristen', '085487878487', 'dhika.friski@gmail.com', '6093782dc1f1d.png'),
(66, 0, '199984871878', 'IIS', 'ELSE CORNELIA TINAMBUNAN', '2002-02-03', 'perempuan', 'Tangerang', 'islam', '085152457878', 'else.cornelia@gmail.com', '60937bd073ad8.png'),
(67, 0, '199984523187', 'IIS', 'FEBRIANE SETIAWAN PUTRI', '2004-02-03', 'perempuan', 'Tangerang', 'islam', '085157898412', 'febriane23@gmail.com', '60937c0170a5f.png'),
(68, 0, '199985621548', 'IIS', 'FENA YULIANTI', '2002-02-03', 'perempuan', 'Kebumen', 'islam', '085214684742', 'fena@gmail.com', '60937c338ee19.png'),
(69, 0, '199984231857', 'IIS', 'FITRIA DIAH AYU PERTIWI', '2002-02-03', 'perempuan', 'Tangerang', 'islam', '085478924843', 'fitriadiah@gmail.com', '60937d007ede0.png'),
(70, 0, '199984854876', 'IIS', 'GISKA MAULIDA ARWANI', '2002-02-03', 'laki-laki', 'Tangerang', 'islam', '085478621887', 'giska@gmail.com', '60937d626ee94.png'),
(71, 0, '199984876521', 'IIS', 'INASHAQI SALAMAH', '2005-02-03', 'perempuan', 'Kebumen', 'islam', '087689543218', 'inashaqi@gmail.com', '60937d9597101.png'),
(72, 0, '199984235478', 'IIS', 'JESIKA BR TAMBA', '2005-02-03', 'perempuan', 'Tangerang', 'islam', '085214568754', 'jesika.br@gmail.com', '60937e3a988ab.png'),
(73, 0, '199984878157', 'IIS', 'MUHAMAD DAFA NUR ZAKI', '2002-05-03', 'laki-laki', 'Banjarmasin', 'islam', '082245687878', 'dafa.nurzaki@gmail.com', '60937e7ab9fb3.png'),
(74, 0, '199984878487', 'IIS', 'MUHAMMAD IRGI NURFUADI', '2002-02-03', 'laki-laki', 'Jakarta Barat', 'islam', '085157468925', 'm.irgi@gmail.com', '60937f2e93c37.png'),
(75, 0, '199984878487', 'IIS', 'NAUFAL ADJIE ARYA WICAKSANA', '2002-02-03', 'laki-laki', 'Kebumen', 'islam', '089551515457', 'naufal.adj@gmail.com', '609382c7d5756.png'),
(76, 0, '199984878487', 'IIS', 'MUHAMMAD RUSLI ALIEF', '2005-05-03', 'laki-laki', 'Keraton Indah', 'islam', '089848742187', 'muhammad.rusli23@gmail.com', '609382fe133b4.png'),
(77, 0, '199984878487', 'IIS', 'NAZHWA SAMROTUL AENI', '2002-02-03', 'perempuan', 'Kebumen', 'islam', '087846861823', 'nazhwa@gmail.com', '609383300d9bb.png'),
(78, 0, '199984878235', 'IIS', 'NIDA HANIFAH', '2003-02-03', 'perempuan', 'Kebumen', 'islam', '082145687892', 'nida.h@gmail.com', '609383ee3ecb4.png'),
(79, 0, '199984871578', 'IIS', 'NURUL NAILA AMELIA', '2003-02-03', 'perempuan', 'Tangerang', 'islam', '085364541678', 'nurul.laila@gmail.com', '6094eb687bc1d.png'),
(80, 0, '199988754612', 'IIS', 'REGIANA HASRIANTI', '2002-02-03', 'perempuan', 'Kebumen', 'kristen', '085121587868', 'regina@gmail.com', '6094ebf7806ed.png'),
(81, 0, '199984876215', 'IIS', 'RHIF\'Q MAHESA', '2002-05-03', 'laki-laki', 'Tulung Agung', 'islam', '085369874651', 'rhifq@gmail.com', ''),
(82, 0, '199984848712', 'IIS', 'SANTA MEI SANTIKA DEWI SITOHANG', '2002-02-03', 'perempuan', 'Tangerang', 'islam', '088548848787', 'santa.maria23@gmail.com', '6094ed71d1e93.png'),
(84, 0, '199984874185', 'IIS', 'SARLIYANTI IBRAHIM KODA', '2002-02-03', 'perempuan', 'Tangerang', 'kristen', '085214568761', 'sarliyanti@gmail.com', '6094ee4bb3fa1.png'),
(85, 0, '199984878463', 'IIS', 'SISILIA SAFIRA', '2002-03-02', 'perempuan', 'Tangerang', 'kristen', '085545457848', 'sisilia.23@gmail.com', '6094ef246d7a6.png'),
(86, 0, '199984872134', 'IIS', 'STEVANY PRISMA KURNIA', '2002-02-03', 'perempuan', 'Tangerang', 'kristen', '082211646578', 'stevany.kur@gmail.com', '6094f219e0abb.png'),
(87, 0, '199848784874', 'IIS', 'STEVEN IMMANUEL MANURUNG', '2005-02-03', 'laki-laki', 'Tangerang', 'kristen', '085545784187', 'imanuel@gmail.com', '6094f2408c74f.png'),
(88, 0, '199984871687', 'IIS', 'ZANDIKA AL VAREZLIH', '2002-02-02', 'laki-laki', 'Magetan', 'islam', '085545645789', 'zandika@gmail.com', '6094f27e3a58c.png'),
(89, 0, '199984878187', 'MIPA', 'Agung Ardila Putra', '2002-05-03', 'laki-laki', 'Tangerang', 'islam', '082246486462', 'agung@gmail.com', '6094f2b0b74ae.png'),
(90, 0, '199984875245', 'MIPA', 'Anggie Yuwanda Safitri', '2005-05-02', 'perempuan', 'Kebumen', 'islam', '085478562187', 'anggie.yuwa@gmail.com', '6094f2ef69e29.png'),
(91, 0, '199984878524', 'MIPA', 'Athaya Nasywa Anindya', '2004-02-02', 'perempuan', 'Kebumen', 'islam', '085768461231', 'athaya.nasywa@gmail.com', '6094f32a8d617.png'),
(92, 0, '199984878484', 'MIPA', 'Berliana Dwi Junia Fasha', '2006-05-04', 'perempuan', 'Kebumen', 'islam', '085487843487', 'berli@gmail.com', '6094f354bf83a.png'),
(93, 0, '199984875487', 'MIPA', 'Devi Oktaviani', '2005-02-03', 'perempuan', 'Kebumen', 'islam', '085457484848', 'devi.kwan.o23@gmail.com', '6094f3be71371.png'),
(94, 0, '199984872457', 'MIPA', 'Elsa Wulandari', '2002-02-03', 'perempuan', 'Keraton Indah', 'islam', '085121348578', 'elsa.wulin@gmail.com', '6094f3fbe3f9e.png'),
(95, 0, '199984823487', 'MIPA', 'Frieke Infaka Fora Pugung Maiana', '2002-02-03', 'laki-laki', 'Medan', 'islam', '087746543213', 'frieke.infaka@gmail.com', '6094f42b079bf.png'),
(96, 0, '199984875132', 'MIPA', 'Indah Cahyani Simare Mare', '2003-03-03', 'perempuan', 'Kebumen', 'islam', '085515213245', 'indah.c@gmail.com', '6094f44f3927e.png'),
(97, 0, '199984846548', 'MIPA', 'Indah Permata Sari', '2004-04-04', 'perempuan', 'Kebumen', 'islam', '085132165787', 'indah.permata@gmail.com', '6094f4882ecf7.png'),
(98, 0, '199987484158', 'MIPA', 'Jagat Surya Subrata', '2001-01-23', 'laki-laki', 'Tangerang', 'islam', '085154854845', 'jagat.surya@gmail.com', '6094fffabc8b1.png'),
(99, 0, '199984851387', 'MIPA', 'Joana Salsabila', '2003-01-02', 'perempuan', 'Kebumen', 'islam', '085413557878', 'joana.salsa@gmail.com', '6095002791f62.png'),
(100, 0, '199984871213', 'MIPA', 'Lisa Kartikasari', '2004-01-02', 'perempuan', 'Kebumen', 'islam', '085121544848', 'lisa.kartika@gmail.com', '60950100dda2d.png'),
(101, 0, '199984232158', 'MIPA', 'Lutfi Arrosid', '2001-01-02', 'laki-laki', 'Tangerang', 'islam', '085154548451', 'lutfi.ar@gmail.com', '6095012ecb1e3.png'),
(102, 0, '199984523124', 'MIPA', 'Maria Hapsani Hutabarat', '2004-05-02', 'perempuan', 'Medan', 'kristen', '085123548846', 'maria.244@gmail.com', '60950168ed800.png'),
(103, 0, '199984813157', 'MIPA', 'Maria Yohana', '2001-01-02', 'perempuan', 'Medan', 'kristen', '085151548787', 'maria.yoh@gmail.com', '6095023fd414d.png'),
(104, 0, '199988488717', 'MIPA', 'Mila Adela', '2001-01-02', 'perempuan', 'Tangerang', 'islam', '085155487878', 'mila.adela23@gmail.com', '609503ce36444.png'),
(105, 0, '199984878157', 'MIPA', 'Muhammad Adrian Dwiharyanto', '2001-01-02', 'laki-laki', 'Tangerang', 'islam', '085746456487', 'muhammad.adrian@gmail.com', '6095041951238.png'),
(106, 0, '199984842454', 'MIPA', 'Nanda Jessica Kusuma Wijaya', '2004-02-01', 'laki-laki', 'Tangerang', 'islam', '085145487845', 'nanda.jes@gmail.com', '6095048390083.png'),
(107, 0, '199984875157', 'MIPA', 'Oktavia Dwi Priatna', '2003-02-01', 'perempuan', 'Kebumen', 'islam', '085154856875', 'oktavia@gmail.com', '609504ce822ad.png'),
(108, 0, '199984512457', 'MIPA', 'Putri Cahyani', '2002-02-03', 'perempuan', 'Kebumen', 'islam', '085412187878', 'putri.cahya@gmail.com', '6096216d6a780.png'),
(109, 0, '199984221387', 'MIPA', 'Raden Rara Piyas Lejar Wangi', '2003-03-02', 'laki-laki', 'Tangerang', 'islam', '085123548845', 'rede.rara@gmail.com', '609621b59e01e.png'),
(110, 0, '199984875237', 'MIPA', 'Rahima Septia Wardana', '2003-03-02', 'perempuan', 'Tangerang', 'islam', '085132154878', 'rahima.septia@gmail.com', '6096220717971.png'),
(111, 0, '199984532187', 'MIPA', 'Rahmat Priadi', '2003-03-03', 'laki-laki', 'Tangerang', 'islam', '085356845321', 'rahmat.p@gmail.com', '6096223f86f15.png'),
(112, 0, '199985214897', 'MIPA', 'Rista Nikmaturohmah', '2004-03-02', 'perempuan', 'Kebumen', 'islam', '085475687321', 'riska.nikmat@gmail.com', '6096227d18781.png'),
(113, 0, '199984621578', 'MIPA', 'Saila Rahma Syaharani', '2002-02-04', 'perempuan', 'Kebumen', 'islam', '085413215348', 'saila.rahma@gmail.com', '609622b265f1b.png'),
(114, 0, '199984846321', 'MIPA', 'Shela Dwi Heriana', '2001-03-02', 'perempuan', 'Kebumen', 'islam', '085132158768', 'shela.dwi@gmail.com', '6096231003861.png'),
(115, 0, '199984875212', 'MIPA', 'Sherlyana Melya Fahsya', '2002-03-02', 'perempuan', 'Kebumen', 'islam', '085736845123', 'sherlyana.melya@gmail.com', '6096233fd1fa2.png'),
(116, 0, '199984542187', 'MIPA', 'Siti Dian Novianti', '2004-02-02', 'perempuan', 'Kebumen', 'islam', '085476321578', 'siti.dian@gmail.com', '609623732d688.png'),
(117, 0, '199984865465', 'MIPA', 'Siti Rosiha', '2005-04-02', 'perempuan', 'Kebumen', 'islam', '085135764687', 'siti.roisha@gmail.com', '6096239cb66c3.png'),
(118, 0, '199984621578', 'MIPA', 'Tiara Intan Saputri', '2003-02-20', 'perempuan', 'Tangerang', 'islam', '085123547878', 'tiara.inta@gmail.com', '609623cd69748.png'),
(119, 0, '199984532157', 'MIPA', 'Tita Melyana', '2004-02-02', 'perempuan', 'Kebumen', 'islam', '085476213487', 'tita.melya@gmail.com', '60962425e6410.png'),
(120, 0, '199984652132', 'MIPA', 'Tri Laksono', '2005-04-02', 'laki-laki', 'Jakarta Barat', 'kristen', '085132158784', 'tri.lakso@gmail.com', '6096246630ee1.png'),
(121, 0, '199984235482', 'MIPA', 'Vivi Hoiriyah', '2002-01-23', 'perempuan', 'Tangerang', 'islam', '085123574872', 'vivi.horiyah@gmail.com', '60962b32efe4f.png'),
(122, 0, '199984523287', 'MIPA', 'Zahrein Embun Diltsania', '2004-02-02', 'perempuan', 'Kebumen', 'islam', '085213545785', 'zahrein.embun@gmail.com', '60962b6be8ead.png'),
(123, 0, '199984525347', 'MIPA', 'Zhania Ika Shafitry', '2002-02-03', 'perempuan', 'Tangerang', 'islam', '085221548578', 'zhania.ika@gmail.com', '60962c842fd51.png'),
(124, 0, '124213132131', 'MIPA', 'sadsa', '2001-05-04', 'laki-laki', 'Kraton', 'islam', '085154848147', 'dsaara@gmail.com', '60ac776f6a11c.jpg'),
(125, 38, '199281321381', 'IIS', 'Sigit', '2030-04-03', 'laki-laki', 'Jakarta', 'islam', '085515487878', 'sodkaoda@gmail.com', '60acc13509777.jpg'),
(126, 38, '199984878484', 'IIS', 'Praditya Aliftiar', '1999-02-03', 'laki-laki', 'Madiun', 'islam', '081784846487', 'praditya.aliftiar@raharja.info', '60ad95a6c24a1.jpg'),
(127, 37, '199974421312', 'MIPA', 'Akuma', '2000-03-23', 'laki-laki', 'Kebumen', 'islam', '085157457848', 'akuma113@gmail.com', '60aef1d5d6a6f.jpg'),
(128, 37, '199984784878', 'MIPA', 'Kusogemu Kiwame Quest Nomor 1', '1999-03-23', 'laki-laki', 'Pasar Kemis', 'islam', '085128545784', 'kusogame1440@gmail.com', '60b08987370b5.png'),
(131, 44, '199829421985', 'MIPA', 'Yuutaa', '1984-09-03', 'laki-laki', 'Kebumen', 'islam', '085412544788', 'yuuutaa1440@gmail.com', '6135b8a2a0574.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun_akademik`
--

CREATE TABLE `tb_tahun_akademik` (
  `kode_tahun_akademik` int(11) NOT NULL,
  `nama_tahun_akademik` varchar(10) NOT NULL,
  `semester` enum('Ganjil','Genap','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tahun_akademik`
--

INSERT INTO `tb_tahun_akademik` (`kode_tahun_akademik`, `nama_tahun_akademik`, `semester`) VALUES
(1, '2021/2022', 'Ganjil'),
(2, '2021/2022', 'Genap'),
(3, '2022/2023', 'Ganjil'),
(4, '2022/2023', 'Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','walikelas','guru','siswa') NOT NULL,
  `siswa_id_siswa` int(11) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `kode_walas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `siswa_id_siswa`, `kode_guru`, `kode_walas`) VALUES
(18, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 0, 0, 0),
(20, 'abdi', '8b9c42be36345d5f3ba864c88f493e73', 'siswa', 18, 0, 0),
(22, 'azis01', '29b0e05e5fa93cf7acaa0cfc577156c5', 'siswa', 1, 0, 0),
(23, 'aprilia', 'ef9638c9b59e2e2e0ef3f830ef885f81', 'siswa', 25, 0, 0),
(27, 'azizah', 'c83127aaa949deeb6169d36f7c6a1cee', 'siswa', 27, 0, 0),
(28, 'indah', 'f3385c508ce54d577fd205a1b2ecdfb7', 'siswa', 34, 0, 0),
(29, 'amanda', '6209804952225ab3d14348307b5a4a27', 'siswa', 19, 0, 0),
(31, 'praditya', '7e41672947e93a91247d7767ed1c6a95', 'siswa', 126, 0, 0),
(32, 'vico1', '131cb980512fc573a25b4048da3ffa7a', 'siswa', 51, 0, 0),
(33, 'sigit', '223a0fa8f15933d622b3c7a13f186027', 'siswa', 125, 0, 0),
(34, 'kusogemu', '327d6d8abbf836220891a50487fb8f6b', 'siswa', 128, 0, 0),
(35, 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'siswa', 20, 0, 0),
(36, 'ariel', '4900d0a19b6894a4a514e9ff3afcc2c0', 'siswa', 26, 0, 0),
(38, 'anggito', 'eb9ad9dca30e1674d1868aa9b4107bb6', 'siswa', 24, 0, 0),
(40, 'zakiyatun', 'c8b9f852844bbde96c5e930a1888961f', 'walikelas', 0, 0, 1),
(41, 'kiki', 'd9d00b74c554f07452ea200d52d421b0', 'guru', 0, 1, 0),
(42, 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9', 'guru', 0, 2, 0),
(43, 'hanna', '40e187d362ceba299422887d4e81d32a', 'walikelas', 0, 0, 2),
(44, 'hannagurumapel', 'b3ccec48915f725ff78c9d9a690b1bb4', 'guru', 0, 11, 0),
(45, 'nabila12', 'ebc525d1864ce6b38136b5e3931c868f', 'siswa', 44, 0, 0),
(53, 'azkaguru171', 'f637e9d26ed5980096a7fe54d10729dd', 'guru', 0, 19, 0),
(54, 'azkawalas171', 'f637e9d26ed5980096a7fe54d10729dd', 'walikelas', 0, 0, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_walas`
--

CREATE TABLE `tb_walas` (
  `kode_walas` int(11) NOT NULL,
  `kode_guru` int(11) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_walas`
--

INSERT INTO `tb_walas` (`kode_walas`, `kode_guru`, `kode_kelas`) VALUES
(1, 12, '36'),
(2, 11, '37'),
(3, 14, '38'),
(4, 19, '43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`kode_absen`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_extrakulikuler`
--
ALTER TABLE `tb_extrakulikuler`
  ADD PRIMARY KEY (`kode_nilai_extra`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indeks untuk tabel `tb_jadwal_mapel`
--
ALTER TABLE `tb_jadwal_mapel`
  ADD PRIMARY KEY (`kode_jadwal`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `kode_ruangan` (`kode_ruangan`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indeks untuk tabel `tb_nilai_keterampilan`
--
ALTER TABLE `tb_nilai_keterampilan`
  ADD PRIMARY KEY (`id_nilai_keterampilan`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_nilai_mapel`
--
ALTER TABLE `tb_nilai_mapel`
  ADD PRIMARY KEY (`id_nilai_mapel`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_nilai_raport`
--
ALTER TABLE `tb_nilai_raport`
  ADD PRIMARY KEY (`kode_nilai_raport`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_nilai_mapel` (`id_nilai_mapel`),
  ADD KEY `id_nilai_keterampilan` (`id_nilai_keterampilan`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indeks untuk tabel `tb_sikap`
--
ALTER TABLE `tb_sikap`
  ADD PRIMARY KEY (`kode_sikap`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_sikap_sosial`
--
ALTER TABLE `tb_sikap_sosial`
  ADD PRIMARY KEY (`kode_sikap_sosial`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_tahun_akademik` (`kode_tahun_akademik`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `tb_tahun_akademik`
--
ALTER TABLE `tb_tahun_akademik`
  ADD PRIMARY KEY (`kode_tahun_akademik`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_siswa` (`siswa_id_siswa`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_walas` (`kode_walas`);

--
-- Indeks untuk tabel `tb_walas`
--
ALTER TABLE `tb_walas`
  ADD PRIMARY KEY (`kode_walas`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `kode_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_extrakulikuler`
--
ALTER TABLE `tb_extrakulikuler`
  MODIFY `kode_nilai_extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kode_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal_mapel`
--
ALTER TABLE `tb_jadwal_mapel`
  MODIFY `kode_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kode_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_keterampilan`
--
ALTER TABLE `tb_nilai_keterampilan`
  MODIFY `id_nilai_keterampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_mapel`
--
ALTER TABLE `tb_nilai_mapel`
  MODIFY `id_nilai_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_raport`
--
ALTER TABLE `tb_nilai_raport`
  MODIFY `kode_nilai_raport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_sikap`
--
ALTER TABLE `tb_sikap`
  MODIFY `kode_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_sikap_sosial`
--
ALTER TABLE `tb_sikap_sosial`
  MODIFY `kode_sikap_sosial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `tb_tahun_akademik`
--
ALTER TABLE `tb_tahun_akademik`
  MODIFY `kode_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tb_walas`
--
ALTER TABLE `tb_walas`
  MODIFY `kode_walas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
