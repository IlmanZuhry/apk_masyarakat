# Aplikasi Pelaporan Pengaduan Masyarakat

![Logo](gambar/logoo.png)

## 📋 Deskripsi Proyek

Aplikasi Pelaporan Pengaduan Masyarakat adalah sistem berbasis web yang memungkinkan masyarakat untuk menyampaikan pengaduan atau keluhan mengenai pelayanan publik. Aplikasi ini dirancang untuk mempermudah komunikasi antara masyarakat dengan petugas terkait dalam menangani berbagai permasalahan di wilayah Medan Deli.

## ✨ Fitur Utama

### Untuk Masyarakat
- 📝 **Registrasi & Login** - Sistem autentikasi untuk masyarakat
- 📢 **Pengaduan** - Membuat laporan pengaduan dengan upload foto
- 📊 **Tracking Status** - Melihat status pengaduan (Menunggu/Proses/Selesai)
- 👤 **Profil** - Melihat informasi profil pengguna
- 📜 **Riwayat Laporan** - Melihat semua laporan yang pernah dibuat

### Untuk Petugas
- 🔐 **Login Petugas** - Sistem autentikasi khusus petugas
- ✅ **Verifikasi Pengaduan** - Memverifikasi pengaduan yang masuk
- 💬 **Tanggapan** - Memberikan tanggapan terhadap pengaduan
- 📈 **Update Status** - Mengubah status pengaduan (Proses/Selesai)
- 🖨️ **Cetak Laporan** - Mencetak laporan pengaduan dalam format PDF

### Untuk Admin
- 👥 **Manajemen Petugas** - Mengelola data petugas
- 📊 **Dashboard** - Melihat statistik pengaduan
- 🗂️ **Lihat Semua Data** - Akses ke semua data pengaduan dan tanggapan

## 🛠️ Teknologi yang Digunakan

- **Backend:** PHP (Procedural & OOP)
- **Database:** MySQL/MariaDB
- **Frontend:** 
  - HTML5
  - CSS3
  - Bootstrap 5.2.1
  - JavaScript
- **Template:** SB Admin 2
- **Library:** 
  - FPDF (untuk generate PDF)
  - Font Awesome Icons
  - Bootstrap Icons

## 📁 Struktur Database

### Tabel `masyarakat`
```sql
- Nik (PK)
- Nama
- Jenis_kelamin
- Alamat
- Username
- Password
- No_Telp
```

### Tabel `pengaduan`
```sql
- Id_pengaduan (PK)
- Tgl_pengaduan
- Nik (FK)
- Nama
- Isi_laporan
- Foto
- Status (0/proses/selesai)
```

### Tabel `petugas`
```sql
- Id_petugas (PK)
- Nama_petugas
- Username
- Password
- No_Telp
- Level (admin/petugas)
```

### Tabel `tanggapan`
```sql
- Id_tanggapan (PK)
- Id_pengaduan (FK)
- Tgl_tanggapan
- Tanggapan
- Id_petugas (FK)
- Status
```

## 🚀 Cara Instalasi

### Prasyarat
- XAMPP/WAMP/LAMP (PHP 7.4+ dan MySQL)
- Web Browser (Chrome, Firefox, Edge, dll)
- Text Editor (VS Code, Sublime, dll)

### Langkah Instalasi

1. **Clone atau Download Repository**
   ```bash
   git clone <repository-url>
   ```
   atau download ZIP dan extract ke folder `htdocs` (XAMPP) atau `www` (WAMP)

2. **Import Database**
   - Buka phpMyAdmin (http://localhost/phpmyadmin)
   - Buat database baru dengan nama `manz_lapor`
   - Import file `manz_lapor (2).sql` ke database yang telah dibuat

3. **Konfigurasi Database**
   - Buka file `manzzkonek.php`
   - Sesuaikan konfigurasi database jika diperlukan:
   ```php
   var $ilmanhost = "localhost";
   var $user = "root";
   var $pass = "";
   var $dbname = "manz_lapor";
   ```

4. **Jalankan Aplikasi**
   - Start Apache dan MySQL di XAMPP/WAMP
   - Buka browser dan akses: `http://localhost/apk_masyarakat`

## 👥 Akun Default

### Akun Masyarakat
Silakan registrasi melalui halaman registrasi atau gunakan data yang ada di database:
- **Username:** manz
- **Password:** 11

### Akun Petugas
- **Username:** el asepe
- **Password:** 77
- **Level:** Petugas

### Akun Admin
- **Username:** kids
- **Password:** ss
- **Level:** Admin

## 📖 Alur Kerja Aplikasi

### 1. Pelaporan
- Masyarakat membuat akun dan login
- Mengisi form pengaduan dengan detail dan foto
- Laporan masuk dengan status "0" (Menunggu Verifikasi)
- Petugas memverifikasi kelengkapan laporan
- Laporan diproses maksimal 3 hari setelah verifikasi

### 2. Tindak Lanjut
- Petugas melihat daftar pengaduan yang masuk
- Memberikan tanggapan terhadap pengaduan
- Mengubah status menjadi "Proses"
- Meneruskan ke instansi terkait jika diperlukan

### 3. Penutupan Laporan
- Setelah tindak lanjut selesai (maksimal 10 hari)
- Petugas memberikan tanggapan akhir
- Status diubah menjadi "Selesai"
- Masyarakat dapat melihat hasil penanganan

## 📂 Struktur File Penting

```
apk_masyarakat/
├── index.php              # Halaman landing page
├── login.php              # Login masyarakat
├── logadmin.php           # Login petugas/admin
├── regis.php              # Registrasi masyarakat
├── dashboarduser.php      # Dashboard masyarakat
├── dasboardptg.php        # Dashboard petugas
├── dasboardadmin.php      # Dashboard admin
├── pengaduan.php          # Form pengaduan
├── tampiluser.php         # Data pengaduan user
├── tampilpengaduan.php    # Data pengaduan petugas
├── tanggapan.php          # Form tanggapan
├── verifikasi.php         # Verifikasi pengaduan
├── cetak.php              # Cetak laporan PDF
├── manzzkonek.php         # Class database & fungsi
├── teslogin.php           # Class autentikasi
├── manz_lapor (2).sql     # File database
├── gambar/                # Folder upload foto
├── fpdf/                  # Library PDF
├── vendor/                # Bootstrap & dependencies
└── css/                   # Custom CSS
```

## 🔒 Keamanan

> [!WARNING]
> Aplikasi ini menggunakan metode autentikasi sederhana. Untuk production, disarankan:
> - Gunakan password hashing (bcrypt/Argon2)
> - Implementasi prepared statements untuk mencegah SQL Injection
> - Tambahkan CSRF protection
> - Validasi input yang lebih ketat
> - Implementasi HTTPS

## 🐛 Known Issues

- Password disimpan dalam plain text (tidak di-hash)
- Beberapa query masih rentan SQL Injection
- Validasi file upload perlu ditingkatkan
- Session management bisa diperbaiki

## 🔄 Pengembangan Selanjutnya

- [ ] Implementasi password hashing
- [ ] Prepared statements untuk semua query
- [ ] Notifikasi email/SMS untuk update status
- [ ] Dashboard analytics yang lebih detail
- [ ] Export data ke Excel
- [ ] Responsive design untuk mobile
- [ ] API untuk integrasi mobile app
- [ ] Multi-level approval workflow

## 👨‍💻 Developer

**Ilman Zuhry Hartarto**
- Copyright © 2023

## 📄 Lisensi

Proyek ini dibuat untuk keperluan edukasi dan pembelajaran.

## 📞 Kontak & Support

Jika ada pertanyaan atau menemukan bug, silakan hubungi developer atau buat issue di repository ini.

---

**Catatan:** Pastikan folder `gambar/` memiliki permission write untuk upload foto pengaduan.
