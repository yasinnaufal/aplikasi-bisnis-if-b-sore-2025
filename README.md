langkah-langkah filament:

1. memasang dependensi filament di project laravel (dilakukan sekali saja jika project belum ada dependensi filament)
    composer require "filament/filament:^3.3" -W

2. buat panel (dilakukan sekali saja ketika belum ada panel filament yang terbentuk)
    php artisan filament:install --panels
        isikan nama panel misalnya admin
        nanti halaman filament bisa diakses di panel
        barusan dibuat: http://localhost:8000/admin

3. buat user
    php artisan make:filament-user
        masukkan nama
        masukkan email (digunakan sebagai login)
        masukkan password (tampilannya kosong)

4. buat resource
    php artisan make:filament-resource Barang
        membuat resource untuk model Barang