1. memasang dependensi filament di project laravel
    composer require "filament/filament:^3.3" -W

2. buat panel
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