1. git clone
2. copy isi dari .env.example lalu buat file baru .env lalu di paste
3. di .env line 14 di ganti DB_DATABASE=areakerja
4. composer install
5. php artisan key:generate
6. php artisan migrate:fresh --seed
7. php artisan serve

*Note:
Jika ingin menggunakan atau menjalankan fitur kontak kami silahkan isi 

MAIL_USERNAME={alamat email kamu}
MAIL_PASSWORD={app password email kamu}
MAIL_FROM_ADDRESS={alamat email kamu}
MAIL_ADMIN_ADDRESS={alamat email kamu}

di dalam .env