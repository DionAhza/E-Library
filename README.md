# 📚 Sistem Informasi Perpustakaan - Laravel

Aplikasi Sistem Informasi Perpustakaan berbasis Laravel.  
Project ini dibuat sebagai media pembelajaran untuk memahami Migration, Relasi Database, CRUD, Upload Gambar, Authentication, dan Dashboard Admin.

---

## 🛠️ Persyaratan Sistem

- PHP >= 8.1  
- Composer  
- MySQL  
- Git  
- Laragon / MAMP / XAMPP  

---

## 🚀 Cara Install Project

1. Clone repository
```bash
git clone https://github.com/username/nama-repository.git
cd e-library
```

2. Install dependency
```bash
composer install
```

3. Copy file environment
Linux/Mac : 
```bash
cp .env.example .env
```
Windows : 
```bash
copy .env.example .env
```

4. Generate app key
```bash
php artisan key:generate
```

5. Buat database baru di phpMyAdmin / MySQL dengan nama:
```
belajar_perpus_db
```

6. Atur database di file `.env`
```
DB_DATABASE=belajar_perpus_db
DB_USERNAME=root
DB_PASSWORD=
```

7. Jalankan migration
```bash
php artisan migrate
```

Jika ingin sekalian isi data awal:
```bash
php artisan migrate --seed
```

8. Jalankan server
```bash
php artisan serve
```

Buka di browser:
```
http://127.0.0.1:8000
```

---

## 🔥 Reset Database (Jika Error)

```bash
php artisan migrate:fresh
```
⚠️ Semua data akan terhapus.

---

## ❗ Jika Terjadi Error

- Pastikan database sudah dibuat
- Pastikan file `.env` sudah benar
- Jalankan ulang `composer install`
- Jalankan ulang `php artisan key:generate`

---

✨ Selamat belajar Laravel 🚀
