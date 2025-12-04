# Lab10Web

berikut penjelasan pada praktikum 10

A. Langkah-langkah

1. mobil.php

pada bagian ini kode class berfungsi sebagai cetak biru pada untuk objek mobil dimana di dalamnya menggunakan metode gantiWarna() untuk merubah warna dan tampilWarna() untuk menampilkan warna yang diimplementasikan di kode bawah setelah class ditutup. Ini hasil dari pembuatan kode terxebut

<img width="1920" height="1080" alt="Screenshot (976)" src="https://github.com/user-attachments/assets/6028e7ca-42c0-4add-91c1-4e08d52c350b" />

2. form.php

disini Class Form adalah implementasi dari OOP yang bertujuan untuk memisahkan logika pembuatan formulir dari kode HTML biasa, sehingga memudahkan pengembang untuk membuat berbagai formulir input teks hanya dengan membuat objek Form dan memanggil metodenya.

3. form_input.php

menyertakan include form.php di awal akan memanggil fungsi yang berada di form.php lalu digabungkan dengan kode input yang juga menggunakan kode yang memanggil class form, berikut hasil gambar dari kode ini

<img width="1920" height="1080" alt="Screenshot (977)" src="https://github.com/user-attachments/assets/cc624c0e-0b89-4711-a515-0eeac94e93be" />

4. database.php

Class Database ini adalah contoh penerapan Design Pattern Repository atau Data Access Object (DAO) sederhana dalam OOP. Tujuannya adalah untuk:

Enkapsulasi Detail Koneksi: Detail host, pengguna, dan proses koneksi disembunyikan di dalam class. 

Kode yang Lebih Bersih: Pengembang lain tidak perlu menulis query SQL seperti SELECT * FROM table WHERE... atau INSERT INTO..., melainkan cukup memanggil metode seperti $db->get('users', 'id=1')

B. Tugas

pada bagian ini saya akan mengubah beberapa bagian pada file projek sebelumnya dengan menambahkan oop

<img width="1920" height="1080" alt="Screenshot (978)" src="https://github.com/user-attachments/assets/e58303b3-a37d-4f92-a8de-16503b32a322" />

<img width="1920" height="1080" alt="Screenshot (979)" src="https://github.com/user-attachments/assets/40bfd127-fa82-4341-91e6-d663931e4c71" />

<img width="1920" height="1080" alt="Screenshot (980)" src="https://github.com/user-attachments/assets/d924be39-1676-450c-950a-00a0b98054ff" />

<img width="1920" height="1080" alt="Screenshot (981)" src="https://github.com/user-attachments/assets/b2571c79-dd7f-4325-acff-195ec3d20df0" />

mungkin secara hasil tidak ada perubahan tapi dalam kode banyak hal yang berubah terutama fungsi yang ditampilkan diatas. untuk mengetahui seluruh kode yang dibuat, kita bisa melihat di folder diatas yang sudah dikirim

cukup sekian terima kasih
