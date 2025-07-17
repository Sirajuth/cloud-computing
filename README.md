# HealthyMe - Health Web App with Docker #
HealthyMe adalah aplikasi web sederhana bertema kesehatan dengan fitur seperti:
- Kalkulator BMI
- Pendidikan kesehatan
- Rekomendasi lokasi olahraga
- Backend PHP & MySQL
- UI phpMyAdmin untuk kelola database


# Struktur Docker #
Aplikasi ini terdiri dari 3 container yang berjalan menggunakan `docker-compose`:
| Service       | Port Lokal     | Keterangan                                     |
|---------------|----------------|------------------------------------------------|
| `web`         | 8080           | Apache + PHP container untuk frontend HTML/PHP |
| `db`          | Internal       | MySQL container untuk menyimpan data           |
| `phpmyadmin`  | 8081           | UI untuk akses database MySQL                  |

# Struktur Folder Aplikasi #
HealhtyMe/

│   app.js

│   Dockerfile

│   index.html

│   styles.css

│
├───.vscode
│       settings.json
│
├───img/
│       bmi.jpg
│       calculator.jpeg
│       education.jpg
│       education.webp
│       fitness.jpg
│
├───kalkulator/
│       Kalkulasi.php
│       Kalkulator.css
│       Kalkulator.js
│       Kalkulator.php
│       Records.php
│
├───pend_kesehatan/
│       pend_kesehatan.css
│       pend_kesehatan.php
│
└───Rekomendasi/
    │   rekomendasi.css
    │   rekomendasi.php
    │
    └───img/
            laptrilombajuang.jpg
            metrofitness.jfif
            oasisswimmingpool.jpg
            pantaimarina.jpg


# Cara Menjalankan HealthyMe Web App #

1. Pastikan Docker sudah terinstall pada Device Anda 
2. Pastikan WSL sudah terinstall pada Device Anda 
3. Buka Terminal 
4. Download file docker-compose.yml dengan perintah: curl -O https://raw.githubusercontent.com/Sirajuth/cloud-computing/main/docker-compose.yml
5. Jalankan perintah: docker-compose up -d 
6. Download file createdb.txt dengan perintah: curl -O https://raw.githubusercontent.com/Sirajuth/cloud-computing/main/createdb.txt
6. Buka Browser (chrome/edge/mozilla/dll)
7. Buka phpmyadmin melalui Browser dengan mengetikan: localhost:8081
8. Masukkan username 'admin' dan password 'password'
9. Buka Tab SQL
10. Masukkan Kode yang ada dalam file createdb.txt
11. Buka Aplikasi Melalui Browser dengan mengetikan: localhost:8080
12. Aplikasi siap digunakan.
