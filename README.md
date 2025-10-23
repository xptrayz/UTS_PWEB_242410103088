Website ini adalah aplikasi mini berbasis Laravel yang berfungsi untuk mengelola data produk toko foto, seperti cetak foto, figura, album, dan piala.
Sistem ini dibuat tanpa database — semua data disimpan dalam array di controller

Fitur Utama:

Login Page
Pengguna memasukkan username dan password (password default: 12345).
Setelah login, sistem akan mengarahkan ke halaman Dashboard dengan membawa username melalui query parameter ?username=nama.

Dashboard
Menampilkan sapaan selamat datang dan ringkasan menu menuju halaman lain seperti Pengelolaan Produk dan Profil.

Halaman Pengelolaan Produk
Menampilkan daftar produk toko foto dalam bentuk tabel.
Data diambil dari array di PageController dan ditampilkan dengan looping @foreach pada Blade Template.

Profile Page
Menampilkan informasi pengguna yang login seperti nama, email, dan peran (misalnya “Pemilik Studio Foto”).

Logout (opsional)
Tombol logout mengembalikan pengguna ke halaman login.

File utama:

routes/web.php → berisi semua route.

PageController.php → mengatur logika tiap halaman.

layouts/app.blade.php → layout utama.

components/navbar & components/footer → komponen Blade.

login, dashboard, pengelolaan, profile → view utama.
