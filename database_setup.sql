-- Database Setup Script untuk DevStack SaaS Authentication
-- Jalankan script ini di phpMyAdmin setelah setup XAMPP

-- 1. Buat database baru
CREATE DATABASE IF NOT EXISTS ci4_devstack;

-- 2. Gunakan database yang baru dibuat
USE ci4_devstack;

-- 3. Buat tabel users untuk sistem autentikasi
CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50) NULL,
    last_name VARCHAR(50) NULL,
    is_active TINYINT(1) NOT NULL DEFAULT 1,
    email_verified_at DATETIME NULL,
    created_at DATETIME NULL,
    updated_at DATETIME NULL,
    PRIMARY KEY (id),
    UNIQUE KEY unique_email (email),
    UNIQUE KEY unique_username (username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 4. Insert sample user untuk testing (password: 12345678)
INSERT INTO users (username, email, password, first_name, last_name, is_active, created_at, updated_at)
VALUES (
    'admin',
    'admin@devstack.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi', -- password: password
    'DevStack',
    'Admin',
    1,
    NOW(),
    NOW()
);

-- 5. Verifikasi tabel berhasil dibuat
SELECT 'Database ci4_devstack berhasil dibuat dengan tabel users' as status;
SELECT * FROM users;