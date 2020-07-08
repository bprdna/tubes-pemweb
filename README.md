Nama Project : Aplikasi kegiatan Seminar / Webinar

Link Repository : https://github.com/bprdna/tubes-pemweb.git

Anggota Kelompok :
Aziz Dafa Putra		(M0518008)
Bintang Pradana Erlangga P.	(M0518010)
Candra Tangguh Pradipta	(M0518012)


README
Ekstrak project "tubes-pemweb"
Jalankan perintah composer update
Buat database SQL dengan nama "tubes-pemweb"
Pastikan SQL Server berjalan kemudian jalankan perintah php artisan migrate
Jalankan perintah php artisan serve
Buka 127.0.0.1:8000 pada browser
Pilih menu register untuk mendaftar (account yang pertama kali didaftarkan akan menjadi admin)
Masuk ke 127.0.0.1:8000/admin untuk mengakses halaman admin. Admin dapat menambah, menghapus dan melihat informasi mengenai seminar
Masuk ke 127.0.0.1:8000/home untuk mengakses daftar seminar yang dapat diikuti
Klik daftar untuk mengikuti seminar
Daftar user akan disimpan pada table users, daftar seminar akan disimpan pada table seminars, daftar user dan seminar akan disimpan pada table seminar_user
