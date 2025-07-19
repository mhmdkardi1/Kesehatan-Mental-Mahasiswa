Berikut adalah contoh **README.md** yang keren dan rapi untuk proyek kamu dengan judul:

> **Pengembangan RESTful API Sistem Manajemen Kesehatan Mental Mahasiswa Berbasis Laravel dan JWT**

---

````md
# 🧠 Mental Health API - Laravel RESTful Service

Proyek ini dibuat untuk memenuhi tugas **Ujian Akhir Semester** mata kuliah **Web Services** di **Universitas Bumi Gora**.

> 📌 Judul Proyek: **Pengembangan RESTful API Sistem Manajemen Kesehatan Mental Mahasiswa Berbasis Laravel dan JWT**

## 👥 Anggota Kelompok
| NIM          | Nama                     |
|--------------|--------------------------|
| 2201040005   | Sukardi                  |
| 2201040006   | Muhammad Ariq Novaldi    |
| 2201040007   | Rumnan                   |
| 2201040001   | Rhamdani Azhary          |

---

## 📝 Deskripsi Singkat

Sistem ini merupakan API berbasis Laravel untuk membantu memantau dan mencatat kesehatan mental mahasiswa, dengan fitur mood check-in harian, otentikasi JWT, dan pengelolaan data pengguna. Mahasiswa dapat merefleksikan kondisi emosional mereka dan menyimpan riwayat suasana hati.

---

## 🚀 Cara Menjalankan Sistem

### 1. Clone Repository
```bash
git clone https://github.com/namakamu/mental-health-api.git
cd mental-health-api
````

### 2. Install Dependency

```bash
composer install
composer require tymon/jwt-auth
```

### 3. Publish dan Generate JWT Secret

```bash
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```

### 4. Konfigurasi `.env`

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mental_health_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi dan Seed Database

```bash
php artisan migrate
php artisan db:seed
```

### 6. Jalankan Server

```bash
php artisan serve
```

🔗 Akses API di: [http://localhost:8000](http://localhost:8000)

---

## 🔐 Akun Uji Coba

| Role  | Email                                         | Password |
| ----- | --------------------------------------------- | -------- |
| Admin | [admin@example.com](mailto:admin@example.com) | password |
| User  | [user@example.com](mailto:user@example.com)   | password |

---

## 📡 API Endpoint

### 🔑 Auth

* `POST /api/register` - Registrasi Pengguna
* `POST /api/login` - Login dan Ambil Token

### 📊 Mood Check-In

* `GET /api/mood-check-ins` - Lihat semua mood user
* `POST /api/mood-check-ins` - Tambah mood baru
* `GET /api/mood-check-ins/{id}` - Detail mood
* `PUT /api/mood-check-ins/{id}` - Edit mood
* `DELETE /api/mood-check-ins/{id}` - Hapus mood

> Header Authorization: `Bearer {your_token}`

---

## 📎 Contoh Request (POST /mood-check-ins)

```json
{
  "mood": "Sedih",
  "description": "Hari ini capek banget sama tugas kuliah"
}
```

---

## 📬 Dokumentasi API

Dokumentasi lengkap tersedia via Postman:
📁 [Mental Health API Postman Collection](#) *(ganti dengan link koleksi kamu)*

---

## 🤝 Contributing

Terima kasih atas kontribusi Anda! Untuk kontribusi, silakan baca panduan resmi Laravel:
📖 [Laravel Contribution Guide](https://laravel.com/docs/contributions)

---

## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT License](https://opensource.org/licenses/MIT).

---

## 🧑‍💻 Dibuat dengan ❤️ oleh Mahasiswa RPL Universitas Bumi Gora

```

---

Jika kamu ingin aku bantu juga menyiapkan versi `.md` yang siap di-*push* ke GitHub atau menambahkan badges (build status, license, dsb), tinggal bilang aja ya!
```
