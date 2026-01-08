CREATE DATABASE IF NOT EXISTS dailyjournal;
USE dailyjournal;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  nama VARCHAR(100) NOT NULL
);

DROP TABLE IF EXISTS article;
CREATE TABLE article (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(200) NOT NULL,
  isi TEXT NOT NULL,
  tanggal DATETIME NOT NULL,
  gambar VARCHAR(255) DEFAULT NULL,
  username VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password, nama) VALUES
('admin', '$2y$10$tF5.UIIlVXqXUdGrEg7lhua5mK2o1xwxVUcTrkED7UBu0kbG67fJu', 'Administrator');

INSERT INTO article (judul, isi, tanggal, gambar, username) VALUES
('Selamat Datang', 'Ini adalah artikel DailyJournal. Kamu bisa edit, hapus, tambah, dan mencari artikel secara realtime menggunakan jQuery AJAX.', NOW(), NULL, 'admin'),
('Tips Hosting InfinityFree', 'Pastikan upload file ke folder htdocs, buat database, import file SQL, lalu sesuaikan koneksi.php dengan DB Host, DB Name, DB User, dan DB Password dari InfinityFree.', NOW(), NULL, 'admin');
