# Installation

## Setup this repository first
Usage
```bash
git clone {{URL}}
cd undangan
```

## Setup Laravel Packages and Migrations

### Make sure you do this before setup on bash

* PHP version is on version 8
* .env File is available or exists
* Change database config on .env file
* Composer installed

### Bash Usage

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
php artisan migrate:fresh --seed
php artisan serve
```
### landing page with guest name
http://undangan.test/?to=Rachma+%26+Agung

### login
```bash
http://undangan.test/admin
E : admin@undangan.io
P : 123qweasd
```

### DEMO
https://rachma-agung.com
