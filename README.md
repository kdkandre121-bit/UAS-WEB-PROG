# ARTNOVA - Galeri Seni Futuristik

**ARTNOVA** adalah sistem manajemen galeri seni digital modern yang dibangun menggunakan kerangka kerja **Laravel**. Platform ini menyajikan antarmuka publik yang memukau dengan sentuhan estetika neon futuristik, serta dilengkapi panel admin yang aman dan handal untuk pengelolaan aset seni secara efisien.

## 🚀 Fitur Utama

### 🌌 Galeri Publik
- **Desain Futuristik**: Mengusung konsep mode gelap (*dark mode*) dengan efek pendar neon dan elemen *glassmorphism* yang elegan.
- **Konten Dinamis**: Menampilkan koleksi karya seni yang diambil langsung dari basis data secara *real-time*.
- **Tata Letak Responsif**: Tampilan grid yang fleksibel dan optimal untuk berbagai ukuran layar perangkat.
- **Antarmuka Interaktif**: Pengalaman pengguna yang hidup dengan animasi dan transisi halus.

### 🛡️ Panel Admin
- **Otentikasi Aman**: Sistem login khusus untuk administrator dengan lapisan keamanan terpisah.
- **Dasbor Terpadu**: Tampilan pusat kendali untuk memantau seluruh aset seni dengan antarmuka yang bersih.
- **Manajemen Data (CRUD)**: Kendali penuh untuk membuat, melihat, memperbarui, dan menghapus data poster seni.
- **Dukungan Tautan Gambar**: Kemudahan pengelolaan visual cukup dengan menggunakan tautan (URL) gambar eksternal, sehingga tidak membebani penyimpanan lokal.

## 🛠️ Teknologi yang Digunakan
- **Framework**: Laravel 11
- **Basis Data**: MySQL
- **Pewarnaan & Gaya**: Tailwind CSS (CDN) dengan Kustomisasi CSS
- **Tipografi**: Huruf 'Outfit' dari Google Fonts

## ⚙️ Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

1.  **Salin Repositori**
    ```bash
    git clone https://github.com/username-anda/nama-proyek-art.git
    cd nama-proyek-art
    ```

2.  **Instalasi Dependensi**
    Pasang semua pustaka yang dibutuhkan menggunakan Composer:
    ```bash
    composer install
    ```

3.  **Konfigurasi Lingkungan**
    Duplikasi berkas contoh konfigurasi dan sesuaikan pengaturan basis data Anda:
    ```bash
    cp .env.example .env
    ```
    *Pastikan untuk menyesuaikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di dalam berkas `.env` sesuai dengan konfigurasi lokal Anda.*

4.  **Buat Kunci Aplikasi**
    ```bash
    php artisan key:generate
    ```

5.  **Migrasi & Pengisian Data Awal**
    Siapkan tabel basis data dan isi dengan data contoh:
    ```bash
    php artisan migrate --seed
    ```

6.  **Jalankan Server**
    Aktifkan server pengembangan lokal:
    ```bash
    php artisan serve
    ```
    Akses aplikasi melalui peramban di alamat `http://127.0.0.1:8000`.

## 🔑 Informasi Akses

### Panel Admin
Gunakan kredensial berikut untuk masuk ke halaman pengelolaan:
- **URL**: [http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login)
- **Email**: `admin@example.com`
- **Kata Sandi**: `password`

## 📂 Struktur Direktori Utama

- `app/Models/Poster`: Model data untuk aset karya seni.
- `app/Models/Admin`: Model data untuk pengguna administrator.
- `app/Http/Controllers/Admin`: Logika pengendali untuk fitur-fitur panel admin.
- `resources/views/poster.blade.php`: Tampilan muka untuk galeri publik.
- `resources/views/admin`: Kumpulan tampilan untuk dasbor dan manajemen admin.
