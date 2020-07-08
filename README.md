Nama Project : Aplikasi kegiatan Seminar / Webinar

Link Repository : https://github.com/bprdna/tubes-pemweb.git

Anggota Kelompok :
Aziz Dafa Putra		(M0518008)
Bintang Pradana Erlangga P.	(M0518010)
Candra Tangguh Pradipta	(M0518012)

README:

1. Ekstrak project "tubes-pemweb"
2. Jalankan perintah composer update
3. Buat database SQL dengan nama "tubes-pemweb"
4. Pastikan SQL Server berjalan kemudian jalankan perintah php artisan migrate
5. Jalankan perintah php artisan serve
6. Buka 127.0.0.1:8000 pada browser
7. Pilih menu register untuk mendaftar (account yang pertama kali didaftarkan akan menjadi admin)
8. Masuk ke 127.0.0.1:8000/admin untuk mengakses halaman admin. Admin dapat menambah, menghapus dan melihat informasi mengenai seminar
9. Masuk ke 127.0.0.1:8000/home untuk mengakses daftar seminar yang dapat diikuti
10. Klik daftar untuk mengikuti seminar
11. Daftar user akan disimpan pada table users, daftar seminar akan disimpan pada table seminars, daftar user dan seminar akan disimpan pada table seminar_user
