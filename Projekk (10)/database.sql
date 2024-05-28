-- Membuat database baru
CREATE DATABASE projek_web;

-- Menggunakan database yang baru dibuat
USE projek_web;

-- Membuat tabel pengguna
CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    tanggal_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Membuat tabel barang
CREATE TABLE barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    harga INT NOT NULL,
    stok INT NOT NULL,
    gambar VARCHAR(255)
);

-- Membuat tabel transaksi poin
CREATE TABLE transaksi_poin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pengguna INT,
    id_barang INT,
    jumlah INT,
    tanggal_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_pengguna) REFERENCES pengguna(id),
    FOREIGN KEY (id_barang) REFERENCES barang(id)
);
