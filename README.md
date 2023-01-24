
![Logo](https://mubatekno.com/wp-content/uploads/2021/08/ci4-cover.png)


# Haloo! Selamat Datang 👋


# Rama Recipes

Project yang saya buat untuk memenuhi tugas UAS Pemrogaman Web Lanjut.


## Features

- Full Auth (Login, Logout, dan Register)
- Full CRUD (Create, Read, Update, Delete)
- Auth Filtering
- Upload Files Validation


## Requirement
- Xampp or Laragon (for PHP and MySQL)
- Composer
## Deployment

Silahkan clone project ini dan ikuti tutorial dibawah :

```bash
  composer install
```
Buat file .env (samakan dengan file env) atau ketik command ini.

 dan ubah konfigurasi database sesuai dengan laptop/pc anda.
```bash
  cp env .env
```
Buat database dengan nama yang sesuai pada konfigurasi .env (jika belum ada database nya.

disini saya mencontohkan dengan nama ``` test_ci```)
```bash
  php spark db:create test_ci
```
Jalankan migrate database nya.
```bash
  php spark migrate
```
Jalankan seeder untuk data dummy database.
```bash
  php spark db:seed MakananSeed
  php spark db:seed UserSeed
```
Default login seeder adalah :
```bash
  email : rama@gmail.com || password : rama
```
Terimakasih.





## Author

- [@MasRama](https://github.com/MasRama/)


## Support / Feedback

Hubungi ryushineo@gmail.com untuk kebutuhan lebih lanjut.

