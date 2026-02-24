# Business Case Competition Website

Website ini merupakan halaman *landing page* (statis) untuk sebuah event kompetisi kasus bisnis mahasiswa.

## 📁 Struktur Direktori

Project ini dibangun dengan menggunakan HTML, CSS murni (Vanilla CSS), dan sedikit JavaScript.

```text
project-folder/
├── index.html                  # File utama HTML (Landing Page / Home)
└── assets/
    ├── css/
    │   └── style.css           # Semua gaya CSS / styling website
    ├── images/
    │   └── hero-banner.png     # Gambar banner dan aset lainnya
    └── js/
        └── app.js              # Interaktivitas JS (seperti navbar & animasi scroll)
```

## 🚀 Cara Menjalankan Project

Karena project ini adalah *website statis* tanpa setup *framework* tambahan, website ini sangat mudah untuk dijalankan dan dimodifikasi secara lokal.

1. **Clone Repository (Jika belum)**
   ```bash
   git clone https://github.com/mmdkcxx/websitetandingbiru.git
   cd websitetandingbiru
   ```
2. **Jalankan secara lokal:**
   - Anda cukup membuka file `index.html` menggunakan browser apa saja (Chrome, Firefox, Edge, Safari, dll).
   - **(Rekomendasi)**: Jika Anda menggunakan kode editor seperti **Visual Studio Code**, Anda disarankan untuk menginstal ekstensi **Live Server**. 
     Klik kanan pada file `index.html` dan pilih *Open with Live Server* agar perubahan kode dapat langsung terlihat tanpa perlu me-refresh halaman berulang kali.

## ✨ Fitur Utama (UI)

- **Desain Modern & Responsif**: Website dapat diakses dengan baik di layar Desktop dan Mobile (Smartphone).
- **Animasi Smooth (Scroll Reveal)**: Komponen website akan muncul secara perlahan saal di-scroll (menggunakan observer API di `app.js`).
- **Pendaftaran**: Bagian Timeline, Galeri (Tahun lalu), Peraturan, dan Dropdown Navigasi lengkap.

## 🛠️ Kontribusi / Mengedit

- Jika ingin mengubah teks, gambar, atau link-link pendaftaran, silakan buka dan edit di `index.html`.
- Jika ingin mengubah warna (theme), padding, atau struktur grid responsif, silakan modifikasi lewat `assets/css/style.css`.
- Jika ingin mematikan animasi saat scroll atau mengubah menu mobile *hamburger*, silakan cek di `assets/js/app.js`.
