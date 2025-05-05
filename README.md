# 🐟 Aplikasi Jual Beli Ikan - Laravel + Tailwind
Aplikasi sederhana berbasis Laravel yang menggunakan Tailwind CSS untuk tampilan antarmuka. Aplikasi ini dibuat untuk mempermudah pengelolaan data produk ikan dan menampilkan profil pengguna.

## 🚀 Fitur
* **Login Otentikasi Sederhana**
  Login dengan username dan password yang telah ditentukan.
* **Dashboard Pengguna**
  Menampilkan data pengguna yang login.
* **Pengelolaan Produk Ikan**
  Tabel daftar produk ikan yang tersedia, lengkap dengan harga dan stok.
* **Profil Pengguna**
  Menampilkan data username dan password pengguna (hanya untuk latihan).
* **Komponen Alert**
  Menampilkan pesan notifikasi (sukses, error, dll) dengan komponen Blade sederhana.

## 🧩 Struktur Halaman
### 1. `login.blade.php`
Halaman form login untuk pengguna. Jika login gagal, akan muncul pesan error dengan komponen alert.

### 2. `dashboard.blade.php`
Menampilkan data pengguna yang berhasil login.

### 3. `pengelolaan.blade.php`
Menampilkan daftar produk ikan dalam bentuk tabel dengan gaya Tailwind.

### 4. `profile.blade.php`
Menampilkan username dan password pengguna yang sedang login (simulasi untuk pembelajaran).

### 5. `layouts/app.blade.php`
Layout utama yang memuat bagian header, konten, dan footer.

### 6. `components/alert.blade.php`
Komponen Blade untuk menampilkan notifikasi dinamis (sukses, error, warning, info).

## 📂 Struktur Folder Penting
```
resources/
├── views/
│   ├── login.blade.php
│   ├── dashboard.blade.php
│   ├── pengelolaan.blade.php
│   ├── profile.blade.php
│   ├── layouts/
│   │   └── app.blade.php
│   └── components/
│       └── alert.blade.php
```


## 🔐 Data Login Default
| Username           | Password |
| ------------------ | -------- |
| Tiara Salsabella A | 12345678 |
