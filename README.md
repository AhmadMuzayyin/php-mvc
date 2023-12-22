# PHP MVC

<p align="center"><img src="/public/logo.png" width="200" alt="PHP MVC Logo"></p>

Aplikasi ini adalah kerangka kerja (framework) MVC (Model-View-Controller) sederhana yang dikembangkan menggunakan bahasa pemrograman PHP. Framework ini dirancang untuk membantu Anda dalam membangun aplikasi web dengan struktur yang terorganisir dan pemisahan tanggung jawab antara model, tampilan, dan pengontrol.

## Fitur Utama

- **Struktur MVC:** Menggunakan konsep Model-View-Controller untuk memisahkan logika aplikasi.
- **Eloquent ORM:** Menggunakan Eloquent ORM dari Laravel untuk menyederhanakan interaksi dengan database.
- **URL Helper:** Fungsi URL yang dapat digunakan di seluruh aplikasi untuk menghasilkan URL yang konsisten.

## Instalasi

1. Clone repositori ini: `git clone https://github.com/AhmadMuzayyin/php-mvc.git`
2. Instal dependensi menggunakan Composer: `composer install`
3. Instal dependensi menggunakan NPM: `npm install`
4. Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database.
5. Jalankan perintah `npx tailwindcss -i resources/css/input.css -o public/css/output.css --watch` untuk mendapatkan perubahan tampilan css dari tailwind. tapi anda dapat menghapus fitur ini dengan tidak menjalankan perintah nomor 3 dan perintah nomor 5 dan anda harus meletakan semua template ada di dalam folder `resources/views`
6. Jalankan aplikasi dengan mengetikan perintah `php -S localhost:8000 -t public`

## Struktur Folder

- **app:** Mengandung logika inti aplikasi, termasuk Controllers, Models, dan Helpers.
- **config:** Konfigurasi aplikasi, seperti pengaturan database.
- **public:** File publik seperti gambar, CSS, dan JavaScript.
- **resources:** File sumber daya seperti file view, CSS, dan JavaScript.
- **routes:** Definisi rute aplikasi.

## Penggunaan Fungsi URL

Fungsi URL dapat digunakan di seluruh aplikasi untuk membangun URL yang benar berdasarkan struktur folder public. Contoh penggunaan:

```php
<?php
echo "<link rel='stylesheet' href='<?= url('assets/css/style.css') ?>'>";
?>
```
