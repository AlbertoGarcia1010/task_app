# 📝 Task Project en Laravel

Aplicación web para gestionar tareas, desarrollada con Laravel, Tailwind, Blade y MySQL. Proyecto base para CRUDs simples.

---

## 🚀 Tecnologías utilizadas

- [Laravel 10](https://laravel.com/)
- [Blade](https://laravel.com/docs/blade)
- [MySQL](https://www.mysql.com/)
- [Herd](https://herd.laravel.com/) como entorno local de desarrollo
- [Tailwind CSS](https://tailwindcss.com/)
- PHP 8+

---

## 📦 Requisitos previos

- PHP 8.1 o superior
- Composer
- MySQL
- Laravel Herd (o XAMPP / Laragon, etc.)

---

## ⚙️ Instalación

```bash
# Clonar el repositorio
git clone git@github.com:AlbertoGarcia1010/task_app.git
cd task_app

# Instalar dependencias si es necesario
composer install

# Copiar archivo de entorno y configurar
cp .env.example .env

# Generar la clave de la app si es necesario
php artisan key:generate

# Crear la base de datos en MySQL
# Luego configurar el archivo .env:
# DB_DATABASE=task_db
# DB_USERNAME=root
# DB_PASSWORD=tu_contraseña

# Ejecutar migraciones
php artisan migrate

# Levantar servidor local (Herd lo hace automáticamente) 
php artisan serve

# Si usas Herd (vista index)
http://task_app.test/task
