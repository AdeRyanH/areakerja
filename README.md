1. git clone https://github.com/5h1ro/Areakerja.git
2. copy isi dari .env.example lalu buat file baru .env lalu di paste
3. di .env line 14 di ganti DB_DATABASE=areakerja
4. composer install
5. php artisan key:generate
6. php artisan migrate:fresh --seed
7. php artisan serve
8. php artisan schedule:work
9. composer dump-autoload
