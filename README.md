# 📚 Sistem Informasi Perpustakaan - Laravel

Aplikasi Sistem Informasi Perpustakaan berbasis Laravel.

Project ini dibuat sebagai media pembelajaran untuk memahami:
- Migration
- Relasi Database
- CRUD (Create, Read, Update, Delete)
- Upload Gambar
- Authentication
- Dashboard Admin

---

## 🛠️ Persyaratan Sistem

Pastikan sudah menginstall:

- PHP >= 8.1
- Composer
- MySQL
- Git
- Laragon / MAMP / XAMPP

---

## 🚀 Cara Install Project

### 1️⃣ Clone Repository

```bash
git clone https://github.com/username/nama-repository.git
Masuk ke folder project:

cd e-library
2️⃣ Install Dependency
composer install
3️⃣ Copy File Environment
Linux / Mac:

cp .env.example .env
Windows:

copy .env.example .env
4️⃣ Generate App Key
php artisan key:generate
5️⃣ Buat Database
Buat database baru di phpMyAdmin atau MySQL:

belajar_perpus_db
6️⃣ Setting Database di File .env
Buka file .env, lalu ubah bagian berikut:

DB_DATABASE=belajar_perpus_db
DB_USERNAME=root
DB_PASSWORD=
Sesuaikan dengan konfigurasi masing-masing.

7️⃣ Jalankan Migration
php artisan migrate
Jika ingin sekaligus isi data awal:

php artisan migrate --seed
8️⃣ Jalankan Server
php artisan serve
Buka di browser:

http://127.0.0.1:8000
🔥 Reset Database (Jika Error)
php artisan migrate:fresh
⚠️ Perhatian: Semua data akan terhapus.

👨‍🏫 Catatan
Jika mengalami error:

Pastikan database sudah dibuat

Pastikan file .env sudah benar

Jalankan ulang composer install

Jalankan ulang php artisan key:generate

✨ Semangat belajar Laravel!


---

Kalau mau lebih rapi lagi buat GitHub (pakai badge Laravel + PHP + MySQL biar keliatan profesional), bilang 
