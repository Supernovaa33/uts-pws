# Project Web CRUD Biodata (UTS Pem Web)

Aplikasi web CRUD biodata menggunakan **PHP Native (PDO + SQLite)** dan **Bootstrap 5.3 (CDN)** — **tanpa perlu XAMPP, Laragon, atau server MySQL**.

Database (`data/biodata.sqlite`) beserta tabel `biodata` dan 2 data awal akan **otomatis dibuat saat aplikasi pertama kali dibuka**.

## Struktur Folder

- `config.php` — Konfigurasi nama/NIM navbar, nama tim footer, koneksi PDO SQLite (auto-init & auto-seed), flash message, CSRF, dan upload foto
- `index.php` — Halaman utama menampilkan grid 3 kolom (tombol tambah + daftar kartu biodata)
- `create.php` — Form & proses tambah biodata + upload foto
- `edit.php` — Form & proses edit biodata (foto opsional diganti)
- `delete.php` — Proses hapus biodata (POST + konfirmasi modal)
- `includes/header.php` & `includes/footer.php` — Template navbar dan footer bersama
- `assets/css/style.css` — CSS custom tambahan
- `uploads/` — Folder penyimpanan foto yang diupload
- `data/` — Folder database SQLite (`biodata.sqlite`, otomatis dibuat saat pertama dijalankan)
- `database.sql` — Referensi skema SQL (opsional jika ingin dipakai di MySQL)
- `run.bat` — Shortcut untuk menjalankan server langsung di Windows

## Cara Menjalankan (Tanpa XAMPP / Laragon)

1. Pastikan `php` sudah terpasang di komputer (bisa dicek dengan `php -v`).
2. Jalankan salah satu cara berikut:
   - **Cara cepat**: Klik dua kali file `run.bat` di folder project.
   - **Lewat terminal / PowerShell**:
     ```powershell
     php -S localhost:8000
     ```
3. Buka browser ke `http://localhost:8000`.

## Kustomisasi Nama & NIM

Buka `config.php` lalu ubah konstanta berikut:
- `NAV_NAMA` dan `NAV_NIM` (untuk teks di navbar)
- `TEAM_KETUA` dan `TEAM_ANGGOTA` (untuk teks copyright di footer)


Fikri Rio Andira
