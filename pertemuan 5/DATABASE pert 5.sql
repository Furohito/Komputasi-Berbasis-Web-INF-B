-- Membuat database
CREATE DATABASE pertemuan5;

-- Menggunakan database
USE pertemuan5;

-- Membuat tabel 'users'
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    hobi VARCHAR(255) NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,  -- 'L' untuk Laki-laki, 'P' untuk Perempuan
    usia VARCHAR(50),
    tanggal_lahir DATE
);
DELETE FROM users;
ALTER TABLE users AUTO_INCREMENT = 1;

select * from users;
