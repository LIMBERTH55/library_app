# INF560 - Biblioteca Laravel

Proyecto académico de **Desarrollo Web Backend** (INF560) — Guía de Laboratorio 6.  
Aplicación de gestión de biblioteca con libros, autores, categorías y préstamos.

---

## 🚀 Descripción
Este sistema permite:
- Registrar y visualizar libros con portada, autores, categoría y estado.
- Consultar autores y sus libros asociados.
- Administrar categorías y mostrar insignias de membresía.

---

## 📂 Requisitos
- PHP  
- Composer  
- Laravel  
- MySQL o SQLite



## ⚙️ Instalación
```bash
git clone https://github.com/LIMBERTH55/library_app.git
cd library_app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve



---
INF560 — Universidad Autónoma Tomás Frías  2026 bolivia

