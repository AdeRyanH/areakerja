1. git clone https://github.com/5h1ro/Areakerja.git
2. copy isi dari .env.example lalu buat file baru .env lalu di paste
3. di .env line 14 di ganti DB_DATABASE=areakerja
3. composer install
4. php artisan key:generate
5. php artisan migrate:fresh --seed
6. php artisan schedule:work
6. composer dump-autoload
