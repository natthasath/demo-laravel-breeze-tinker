# 🎉 DEMO Laravel Breeze Tinker

Laravel Tinker: Interactive shell for Laravel framework. Execute PHP code, interact with your application, and troubleshoot in real-time.

![version](https://img.shields.io/badge/version-1.0-blue)
![rating](https://img.shields.io/badge/rating-★★★★★-yellow)
![uptime](https://img.shields.io/badge/uptime-100%25-brightgreen)

### 🚀 Setup

- Create Project

```shell
composer create-project laravel/laravel example-app
```

- Install Package

```shell
composer require laravel/breeze --dev
```

- Configure Environment

```shell
cp .env.example .env
```

- Migrate

```
php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
```

- Make Command Tinker

```
php artisan make:command CreateUser
php artisan make:command Sendmail
```

- Test Command Tinker

```
php artisan create:user "Admin" "admin@example.com" "password"
php artisan send:mail "admin@example.com"
```

### 🏆 Run

- [http://localhost:8000/](http://localhost:8000/) username : `admin` password : `admin`

```shell
php artisan serve
```
