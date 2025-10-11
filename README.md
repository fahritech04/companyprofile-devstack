# Devstack Company Profile

lorem ipsum dolor sit amet

## Prasyarat

Sebelum menginstal, pastikan sistem Anda memenuhi persyaratan berikut:

- PHP version 7.4 atau lebih tinggi
- Composer
- Git
- Web Server (Apache/Nginx)
- MySQL/MariaDB
- Extension PHP yang dibutuhkan:
  - intl
  - mbstring
  - json
  - mysqlnd/pdo_mysql
  - xml
  - curl

## Cara Instalasi

1. Clone repository ini

   ```bash
   git clone https://github.com/username/company-profile.git
   cd company-profile
   ```

2. Install dependensi menggunakan Composer

   ```bash
   composer install
   ```

3. Salin file env

   ```bash
   cp env .env
   ```

4. Konfigurasi file .env

   ```env
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080'

   # Database (jika diperlukan)
   # database.default.hostname = localhost
   # database.default.database = ci4_company_profile
   # database.default.username = root
   # database.default.password =
   # database.default.DBDriver = MySQLi
   ```

5. Set permission folder writeable (untuk Linux/Unix)

   ```bash
   chmod -R 777 writable/
   ```

6. Jalankan development server

   ```bash
   php spark serve
   ```

7. Buka browser dan akses
   ```
   http://localhost:8080
   ```

## Struktur Folder Utama

```
app/
├── Config/          # Konfigurasi aplikasi
├── Controllers/     # Controller
├── Models/         # Model (jika menggunakan database)
├── Views/          # View
│   ├── layout/     # Layout template
│   └── pages/      # Halaman-halaman
└── Language/       # File bahasa
    ├── en/         # Bahasa Inggris
    └── id/         # Bahasa Indonesia
```

## Pengembangan

### Mengubah Konten

1. File bahasa berada di:

   - `app/Language/id/App.php` untuk Bahasa Indonesia
   - `app/Language/en/App.php` untuk Bahasa Inggris

2. View berada di:
   - `app/Views/pages/`
   - Layout utama di `app/Views/layout/main.php`

### Mengubah Tampilan

- File CSS kustom berada di `public/css/style.css`
- Website menggunakan Tailwind CSS untuk styling
- Animasi menggunakan library AOS

## Deployment

1. Ubah environment menjadi production di .env

   ```env
   CI_ENVIRONMENT = production
   ```

2. Set base URL sesuai domain Anda

   ```env
   app.baseURL = 'https://www.domain-anda.com'
   ```

3. Pastikan folder writable bisa ditulis oleh web server
4. Set document root ke folder public/

## Keamanan

- Pastikan folder `writable/` memiliki permission yang tepat
- Nonaktifkan PHP error reporting di production
- Gunakan HTTPS untuk production
- Update CodeIgniter dan dependensi secara berkala

## Update & Maintenance

Untuk update dependencies:

```bash
composer update
```

## Lisensi

[MIT License](LICENSE)

## Kontak

Jika ada pertanyaan atau masalah, silakan buat issue di repository ini.

---

Dibuat dengan ❤️ menggunakan CodeIgniter 4
