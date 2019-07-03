-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2019 pada 18.00
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hdr_komputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barcode` varchar(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barcode`, `nama_barang`, `satuan`, `harga_beli`, `stok`, `harga_jual`, `profit`) VALUES
('101', 'Rexus K9D', '', 70000, 96, 150000, 80000),
('102', 'Seagate Expansion 2TB', '', 600000, 91, 825000, 225000),
('103', 'Intel Core i3-8350K', '', 3000000, 28, 3250000, 250000),
('104', 'Intel Core i5-7640X', '', 4000000, 20, 4450000, 450000),
('105', 'Monitor Acer K202HQL', '', 700000, 98, 875000, 175000),
('106', 'AMD A8-7650K', '', 600000, 88, 789000, 189000),
('107', 'SanDisk Cruzer Blade CZ50 32GB', '', 30000, 80, 54000, 24000),
('111', 'sata 256 GB', '', 500000, 50, 560000, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id` int(11) NOT NULL,
  `nofaktur` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `kode_barcode` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id`, `nofaktur`, `tanggal`, `nama_supplier`, `kode_barcode`, `stok`) VALUES
(5, 'TP001', '2019-03-29', 'PT. Cemilan Sentosa', 'ENVELOPE', 3),
(7, 'TP002', '2019-03-29', 'PT. Jaya Sentosa', 'SAMBAL ABC 123', 1),
(8, 'TP003', '2019-03-28', 'PT. Jaya Sentosa', 'SAMBAL ABC ', 1),
(9, 'TP005', '2019-03-15', 'PT. Cemilan Sentosa', 'Roti', 1),
(10, 'TP004', '2019-03-13', 'PT. Jaya Sentosa', 'ENVELOPE', 1),
(11, 'TP006', '2019-04-01', 'PT.Bahagia Selalu', 'Buku', 1),
(12, 'TP007', '2019-04-01', 'PT. Jaya Sentosa', '23467045658768', 1),
(13, 'TP0011', '2019-04-25', 'PT. Cemilan Sentosa', '23467045658768', 3),
(14, 'TP006', '2019-04-29', 'PT. Cemilan Sentosa', '8995757412003', 5),
(15, 'TP008', '2019-05-02', 'PT. Cemilan Sentosa', '0999871445289', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id` int(11) NOT NULL,
  `kode_penjualan` varchar(20) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id`, `kode_penjualan`, `tgl_penjualan`, `id_konsumen`, `bayar`, `kembali`) VALUES
(55, 'PJ-9963866129', '2019-06-27', 0, 30000, 0),
(56, 'PJ-0126082998', '2019-06-28', 0, 4040000, 1000),
(57, 'PJ-5956068546', '2019-07-01', 0, 1600000, 22000),
(58, 'PJ-5956068546', '2019-07-01', 0, 8000000, 16000),
(59, 'PJ-3537071795', '2019-07-01', 0, 4130000, 5000),
(60, 'PJ-1775945817', '2019-07-02', 0, 2150000, 0),
(61, 'PJ-2559152272', '2019-07-03', 0, 1600000, 22000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan_detail`
--

CREATE TABLE `tb_penjualan_detail` (
  `kode_penjualan` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `kode_barcode` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan_detail`
--

INSERT INTO `tb_penjualan_detail` (`kode_penjualan`, `id`, `kode_barcode`, `jumlah`, `diskon`, `potongan`, `total`) VALUES
('PJ-9963866129', 42, '102', 2, 0, 0, 30000),
('PJ-0126082998', 43, '103', 1, 0, 0, 3250000),
('PJ-0126082998', 44, '106', 1, 0, 0, 789000),
('PJ-5956068546', 45, '106', 2, 0, 0, 1578000),
('PJ-5956068546', 46, '106', 2, 0, 0, 1578000),
('PJ-5956068546', 47, '106', 2, 0, 0, 1578000),
('PJ-5956068546', 48, '103', 1, 0, 0, 3250000),
('PJ-5956068546', 49, '103', 1, 0, 0, 3250000),
('PJ-3537071795', 50, '102', 5, 0, 0, 4125000),
('PJ-1775945817', 51, '101', 3, 0, 0, 450000),
('PJ-1775945817', 52, '102', 1, 0, 0, 825000),
('PJ-1775945817', 53, '105', 1, 0, 0, 875000),
('PJ-2559152272', 54, '106', 2, 0, 0, 1578000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id`, `nama_supplier`, `tlp`, `alamat`) VALUES
(1, 'PT. TechnoKomp', '-', 'Bandung'),
(2, 'PT. Aliando Komputin', '-', 'padang'),
(3, 'PT. UAD Komp', '-', 'Jogja'),
(4, 'PT. Danis Komp', '-', 'Palembang'),
(5, 'PT. Kholiq Corp', '081111', 'jalan KH. Agus Salim No 48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `level`) VALUES
(1, 'danisfaisal', 'Danis Faisal', 'danisfaisal', 'kasir'),
(2, 'kholik', 'Rohmat Kholik', 'kholik', 'kasir'),
(3, 'rais', 'Refaldi Rais', '12345', 'kasir'),
(4, 'singgih', 'singgih', '123123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barcode`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penjualan_detail`
--
ALTER TABLE `tb_penjualan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan_detail`
--
ALTER TABLE `tb_penjualan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
