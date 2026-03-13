



## 📁 Struktur Project

```text
websitetandingbiru/
├── index.php                   # Halaman utama (Landing Page)
├── header.php                  # Komponen navigasi atas
├── footer.php                  # Komponen footer dan pemuatan script
├── login.php                   # Halaman masuk peserta
├── register.php                # Halaman pendaftaran tim
├── forgot-password.php         # Halaman pemulihan kata sandi
├── README.md                   # Dokumentasi project
└── assets/
    ├── css/
    │   └── style.css           # Desain sistem dan semua styling (Glassmorphism, Grid)
    ├── js/
    │   └── app.js              # Logika interaktivitas (Accordion FAQ, Slider, Animations)
    └── images/
        ├── WallofChampion/     # Foto-foto pemenang tahun sebelumnya
        ├── ig/                 # Aset untuk section Agenda (Instagram Feed)
        ├── logo.png            # Logo utama event
        └── hero-banner.png     # Asset visual utama
```

## 🚀 Cara Menjalankan Project

Project ini sekarang menggunakan file `.php`, sehingga memerlukan server lokal dengan dukungan PHP (seperti Laragon, XAMPP, atau MAMP).

1. **Clone Repository**
   ```bash
   git clone https://github.com/mmdkcxx/websitetandingbiru.git
   cd websitetandingbiru
   ```
2. **Setup Server:**
   - Pindahkan folder project ke direktori `www` (Laragon) atau `htdocs` (XAMPP).
   - Jalankan server Apache/NGINX.
   - Akses melalui browser di `http://localhost/websitetandingbiru` atau virtual host yang sesuai.

## ✨ Fitur Utama

- **Premium Design**: Menggunakan teknik *Glassmorphism*, gradien modern, dan tipografi elegan.
- **Interactive FAQ**: Sistem akordion yang responsif untuk membantu calon peserta.
- **Wall of Fame**: Galeri juara interaktif yang difilter berdasarkan tahun dan kategori.
- **Responsive Layout**: Optimal untuk berbagai ukuran layar (mobile, tablet, desktop).
- **Scroll Reveal**: Animasi masuk yang halus saat pengguna melakukan scrolling.

## 🛠️ Pengembangan

- **Ubah Teks/Konten**: Sebagian besar konten berada di `index.php`.
- **Modifikasi Tampilan**: Gunakan `assets/css/style.css`.
- **Interaktivitas JS**: Tambahkan logika baru di `assets/js/app.js`.

## 📝 Changelog Terbaru

### 13 Maret 2026
- **FAQ Section**: Menyeimbangkan layout dengan meratakan tengah list FAQ dan section "Still Have Questions".
- **Bug Fix**: Memperbaiki logika klik (accordion) di FAQ yang sebelumnya tidak berfungsi di file `app.js`.
- **Documentation**: Memperbarui `README.md` dengan struktur project PHP terbaru.

### 28 Februari 2026
- **Hero Section**: Implementasi *slideshow carousel* dengan navigasi arrow dan dots.
- **Gallery Section**: Implementasi tata letak *mosaic* untuk memamerkan dokumentasi event.
