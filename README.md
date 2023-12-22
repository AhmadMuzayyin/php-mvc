# Aplikasi MVC PHP

<!-- <p align="center"><a href="https://php-mvc.com" target="_blank"><img src="/public/logo.png" width="400" alt="PHP MVC Logo"></a></p> -->
<p align="center"><img src="/public/logo.png" width="400" alt="PHP MVC Logo"></p>

Aplikasi ini adalah kerangka kerja (framework) MVC (Model-View-Controller) sederhana yang dikembangkan menggunakan bahasa pemrograman PHP. Framework ini dirancang untuk membantu Anda dalam membangun aplikasi web dengan struktur yang terorganisir dan pemisahan tanggung jawab antara model, tampilan, dan pengontrol.

## Fitur Utama

- **Struktur MVC:** Menggunakan konsep Model-View-Controller untuk memisahkan logika aplikasi.
- **Eloquent ORM:** Menggunakan Eloquent ORM dari Laravel untuk menyederhanakan interaksi dengan database.
- **URL Helper:** Fungsi URL yang dapat digunakan di seluruh aplikasi untuk menghasilkan URL yang konsisten.

## Instalasi

1. Clone repositori ini: `git clone https://github.com/AhmadMuzayyin/php-mvc.git`
2. Instal dependensi menggunakan Composer: `composer install`
3. Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database.
4. Jalankan migrasi database: `php vendor/bin/phinx migrate`

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
$url = $urlHelper->url('assets/css/style.css');
echo "<link rel='stylesheet' href='{$url}'>";
?>
```
