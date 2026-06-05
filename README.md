<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




# 🐾 PretoVet - Sistema de Gestión Veterinaria

Repositorio principal del proyecto **PretoVet**. Todo el código fuente, actualizaciones y mejoras deben gestionarse mediante GitHub para mantener el proyecto sincronizado y evitar versiones desactualizadas.

---

## 📩 Permisos de colaborador

Si GitHub muestra errores como `Permission denied` o no permite realizar `push`:

1. Pasar tu correo de GitHub al administrador del proyecto.
2. Aceptar la invitación de colaborador desde GitHub o desde tu correo electrónico.
3. Volver a intentar el `push`.

---

## 📥 Clonar el proyecto (solo la primera vez)

Abrir Git Bash dentro de:

```bash
C:/xampp/htdocs/
```

Ejecutar:

```bash
git clone https://github.com/carma932/PretoVet.git
cd PretoVet
```

---

## 🔄 Flujo de trabajo

### 1. Actualizar el proyecto antes de trabajar

```bash
git pull origin main
```

---

### 2. Guardar cambios

```bash
git add .
git commit -m "Descripción clara del cambio"
```

Ejemplos:

```bash
git commit -m "Fix: corregido registro de mascotas"
git commit -m "Feat: agregado módulo de citas veterinarias"
git commit -m "Feat: agregado historial médico"
git commit -m "Fix: corregida validación de usuarios"
```

---

### 3. Subir cambios

```bash
git push origin main
```

---

## 🗄️ Base de datos

Los archivos SQL del proyecto se encuentran dentro de:

```bash
/database
```

Si existe una actualización de la base de datos:

1. Ejecutar:

```bash
git pull origin main
```

2. Importar nuevamente el archivo `.sql` actualizado en PHPMyAdmin.

---

## 🐶 Funcionalidades principales

* Gestión de usuarios.
* Registro de mascotas.
* Historial médico veterinario.
* Gestión de citas.
* Gestión de productos.
* Reserva de productos.
* Recetas veterinarias.
* Administración de tipos de pago.
* Panel administrativo.

---

## ⚠️ Recomendaciones

* No enviar archivos `.zip`.
* Realizar siempre `git pull` antes de comenzar a programar.
* Utilizar mensajes claros y descriptivos en los commits.
* No subir archivos de configuración personales (`.env`).
* Verificar que el proyecto funcione antes de realizar `push`.

Si aparece un conflicto al hacer `push`, ejecutar:

```bash
git pull origin main
```

Resolver los conflictos si existen y luego volver a ejecutar:

```bash
git push origin main
```

---

## 🚀 Comandos rápidos

### Actualizar proyecto

```bash
git pull origin main
```

### Guardar cambios

```bash
git add .
git commit -m "Descripción del cambio"
```

### Subir cambios

```bash
git push origin main
```

---

## 👨‍💻 Tecnologías utilizadas

* PHP 8+
* Laravel
* Livewire
* MySQL
* Blade
* Tailwind CSS
* JavaScript
* Git y GitHub

---

## 📌 Repositorio oficial

```bash
https://github.com/carma932/PretoVet.git
```

Mantener siempre el proyecto actualizado desde este repositorio para evitar pérdida de cambios o conflictos entre versiones.

