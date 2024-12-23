UAS Pemrograman Web 2024/2025
Nama : Muhammad Zahran Albara
NIM : 122140240
Kelas : RB

Bagian 1: Client-side Programming (Bobot: 30%)
  1.1 Manipulasi DOM dengan JavaScript (15%)
    Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
    ![image](https://github.com/user-attachments/assets/6f3d19a3-38dd-431b-8eca-3c332d041f01)
    Tampilkan data dari server ke dalam sebuah tabel HTML.
    Form input telah dibuat dengan 5 elemen input, dan data dari server sudah bisa ditampilkan dalam tabel
    ![image](https://github.com/user-attachments/assets/0c7874f5-67a9-4b0b-812a-df80a99cc7a7)

  1.2 Event Handling (15%)
    Tambahkan minimal 3 event yang berbeda untuk meng-handle form pada 1.1.
    Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP.
    ![image](https://github.com/user-attachments/assets/d6dffc35-a86f-4aaa-aedc-e99bbaed5feb)
    
    4 event sudah ditambahkan untuk validasi setiap input menggunakan javascript.

Bagian 2: Server-side Programming (Bobot: 30%)
  2.1 Pengelolaan Data dengan PHP (20%)
    Gunakan metode POST atau GET pada formulir.
    Parsing data dari variabel global dan lakukan validasi di sisi server.
    Simpan ke basis data termasuk jenis browser dan alamat IP pengguna.
    
    saya menggunakan metode post pada web ini, dan parsing data sudah dilakukan verifikasi di sisi server dalam index.php, tambah.php, edit.php, dan delete.php
  2.2 Objek PHP Berbasis OOP (10%)
    Buat sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu.
    
    OOP sudah diimplementasikan dalam KonserController.php dan Koneksi.php

  Bagian 3: Database Management (Bobot: 20%)
    3.1 Pembuatan Tabel Database (5%)
    3.2 Konfigurasi Koneksi Database (5%)
    3.3 Manipulasi Data pada Database (10%)

    Database sudah dibuat, saya membuat 2 buah tabel database yaitu tabel users dan tabel tblPesertaKonser untuk data peserta konser.

  Bagian 4: State Management (Bobot: 20%)
    4.1 State Management dengan Session (10%)
      Gunakan session_start() untuk memulai session.
      Simpan informasi pengguna ke dalam session.
    4.2 Pengelolaan State dengan Cookie dan Browser Storage (10%)
      Buat fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.

    seluruh fitur sudah dibuat dan digabungkan di menu Cookies.

  Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)
(5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
(5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda.
(5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
(5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.

saya mendeploy web di railway.com, langkah langkah:
1.login railway menggunakan akun gitub
2.buat database sql di server railway, lalu ubah konfigurasi port, host, dan password sesuai dengan server railway di kode lokal yang diupload di github.
3.deploy website dari repository github
4.tunggu hingga selesai
5.ubah port web yang sudah terdeploy menjadi 8080
6.Web sudah terdeploy dan link dari web yang terdeploy sudah bisa dibuka.
    
