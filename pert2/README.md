# Nginx dengan Docker Compose

## Deskripsi

Repositori ini berisi konfigurasi Docker Compose untuk menjalankan Nginx sebagai web server dengan dukungan volume untuk konfigurasi dan file statis.

## Prasyarat

Sebelum menjalankan proyek ini, pastikan sistem telah menginstal:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Struktur Proyek

```
.
├── docker-compose.yml
├── nginx/
│   └── nginx.conf
├── src/
│   └── (File statis untuk root web server)
└── latihan/
    └── (File statis untuk direktori /latihan)
```

## Konfigurasi

File `docker-compose.yml` ini melakukan hal berikut:

- Menggunakan image `nginx:latest`.
- Mengekspos port `80` agar dapat diakses melalui `localhost`.
- Menggunakan volume untuk memuat konfigurasi Nginx (`nginx/nginx.conf`).
- Memetakan direktori `src/` dan `latihan/` ke dalam Nginx sebagai root directory.

## Cara Menjalankan

1. Pastikan direktori `nginx/`, `src/`, dan `latihan/` telah dibuat dan berisi file yang diperlukan.
2. Jalankan perintah berikut untuk memulai layanan:
   ```sh
   docker-compose up -d
   ```
3. Akses Nginx melalui browser di `http://localhost`.

## Cara Menghentikan

Untuk menghentikan layanan, jalankan:

```sh
docker-compose down
```

## Lisensi

Proyek ini bebas digunakan dan dimodifikasi sesuai kebutuhan.
