
---

# Pengembangan RESTful API Sistem Manajemen Kesehatan Mental Mahasiswa Berbasis Laravel dan JWT

Proyek ini dibuat untuk memenuhi tugas Ujian Akhir Semester Mata Kuliah **Web Services**
Program Studi Rekayasa Perangkat Lunak – Universitas Bumi Gora

## Anggota Kelompok:

* **2201040005 - Sukardi Alamsyah**
* **2201040006 - Muhammad Ariq Novaldi**
* **2201040007 - Rumnan**
* **2201040001 - Rhamdani Azhary**

---

## Deskripsi Singkat

RESTful API berbasis Laravel yang berfungsi sebagai sistem manajemen kesehatan mental mahasiswa.
Sistem ini memungkinkan pengguna (mahasiswa) untuk melakukan check-in mood harian, mencatat perasaan, dan menyimpan histori mood. Admin dapat menganalisis data untuk keperluan pemantauan kesehatan mental mahasiswa.

Fitur utama:

* Autentikasi JWT
* Registrasi dan login pengguna
* Mood check-in harian
* Riwayat dan analisis mood pengguna

---

## Cara Menjalankan Sistem

### 1. Clone Repository

```bash
git clone https://github.com/namaprojekmu/mental-health-api
cd mental-health-api
```

### 2. Install Dependencies

```bash
composer install
composer require tymon/jwt-auth
```

### 3. Setup JWT Authentication

```bash
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```

### 4. Konfigurasi File `.env`

```bash
cp .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi database di `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mental_health_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Setup Database

```bash
php artisan migrate
php artisan db:seed
```

### 6. Jalankan Server

```bash
php artisan serve
```

Akses API melalui `http://localhost:8000`

---

## Akun Uji Coba

**Admin**
Email: [admin@example.com](mailto:admin@example.com)
Password: password

**Mahasiswa / User**
Email: [user@example.com](mailto:user@example.com)
Password: password

---

## API Endpoints

**Base URL:** `http://localhost:8000/api`

### Autentikasi

* `POST /register` – Registrasi user baru
* `POST /login` – Login user

### Mood Check-In

* `GET /mood-check-ins` – Lihat seluruh data check-in (user)
* `POST /mood-check-ins` – Buat check-in mood baru
* `GET /mood-check-ins/{id}` – Lihat detail check-in mood
* `PUT /mood-check-ins/{id}` – Update check-in mood
* `DELETE /mood-check-ins/{id}` – Hapus check-in mood

---

## Contoh Request dari Frontend (POST /mood-check-ins)

**Method:** `POST`
**Endpoint:** `http://localhost:8000/api/mood-check-ins`
**Header:**
`Authorization: Bearer <token JWT>`
`Content-Type: application/json`

**Body (JSON):**

```json
{
  "mood": "Sedih",
  "description": "Hari ini capek banget sama tugas kuliah"
}
```

---

## Dokumentasi API

Tersedia dokumentasi lengkap via Postman Collection
📎 *\[Link ke Dokumentasi Postman]*

---

## Contributing

Terima kasih telah mempertimbangkan untuk berkontribusi!
Silakan merujuk ke dokumentasi Laravel untuk panduan kontribusi yang tepat.

---

## Code of Conduct

Demi menjaga komunitas Laravel yang ramah dan inklusif, mohon ikuti [Kode Etik Laravel](https://laravel.com/docs/contributions#code-of-conduct).

---

## Keamanan

Jika Anda menemukan celah keamanan dalam Laravel, harap segera hubungi Taylor Otwell di: [taylor@laravel.com](mailto:taylor@laravel.com).

---

## Lisensi

Framework Laravel dilisensikan di bawah lisensi open-source [MIT License](https://opensource.org/licenses/MIT).

---