# Personal Portfolio Laravel

Website portofolio personal berbasis Laravel 12 untuk **Andika Aji Pratama Putra**, dengan data utama diambil dari CV.

## Stack

- Laravel 12
- Blade Template
- Tailwind CSS 4 via Vite
- JavaScript ringan untuk dark mode, mobile menu, dan animasi reveal

## Fitur

- Sticky navbar
- Smooth scroll
- Responsive mobile-first
- Hover effect
- Dark/light mode
- Tombol WhatsApp langsung
- Ikon sosial
- Form kontak sederhana dengan validasi server-side
- Footer clean
- SEO meta dasar

## Struktur File

- `routes/web.php`
- `app/Http/Controllers/PortfolioController.php`
- `resources/views/layouts/app.blade.php`
- `resources/views/portfolio/index.blade.php`
- `resources/css/app.css`
- `resources/js/app.js`

## Routes

- `GET /` untuk halaman portofolio
- `POST /contact` untuk submit form kontak
- `GET /download-cv` untuk unduh CV

## Menjalankan Project

1. Install dependency:

```bash
composer install
npm install
```

2. Siapkan environment:

```bash
copy .env.example .env
php artisan key:generate
```

3. Jalankan development server:

```bash
php artisan serve
npm run dev
```

4. Buka di browser:

```text
http://127.0.0.1:8000
```

## Build Production

```bash
npm run build
```

## Testing

```bash
php artisan test
```

## Catatan Kustomisasi

- Seluruh data portofolio saat ini dipusatkan di `PortfolioController`.
- Bagian `Projects` dibuat placeholder karena CV tidak mencantumkan project spesifik.
- Tombol `Download CV` membaca file dari path:

```text
d:\KULIAH\sertifikat\CV andika.docx
```

Jika path file berubah, ubah method `downloadCv()` di controller.

## Kontak

- Email: `andikaajipratama3@gmail.com`
- WhatsApp: `085868921525`
- Instagram: `https://www.instagram.com/andikaajipratamaputra?utm_source=qr&igsh=MWtveHlpNnMxa3Fzcw==`
