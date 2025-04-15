# Catatan Singkat Docker

## Sebelum
```
.
├── docker-compose.yml  # File konfigurasi Docker Compose
├── nginx
│   └── nginx.conf      # Konfigurasi Nginx
└── src
    ├── index.html      # File HTML utama
```

## Perintah Docker
- **Membangun dan menjalankan container secara *detached***
  ```sh
  docker compose up -d --build
  ```
- **Melihat daftar container yang berjalan**
  ```sh
  docker ps
  ```
- **Menghentikan container**
  ```sh
  docker compose down
  ```

  # Catatan Proyek

## Sesudah
```
.
├── analisis.md
├── catatan.md
├── docker-compose.yml
├── latihan/        # Folder latihan dengan profil
├── nginx/          # Konfigurasi Nginx
├── src/            # Sumber daya utama
│   ├── assets/     # Gambar & logo
│   ├── css/        # Style dasar
│   ├── html/       # File HTML dasar
│   ├── index.html  # Halaman utama
│   ├── lat1/       # Latihan dengan asset terpisah
│   └── style.css   # Style tambahan
└── latihan/        # Folder latihan tambahan
```

## Deskripsi Singkat
- **latihan/** → Berisi halaman latihan dengan profil.
- **nginx/** → Konfigurasi server untuk menjalankan proyek.
- **src/** → Berisi aset, CSS, dan file HTML utama.
- **docker-compose.yml** → Menjalankan proyek dengan Docker.