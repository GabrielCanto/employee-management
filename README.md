# Employee Management System

A Laravel-based application for managing employee data and information with a modern admin panel built using Filament.

## 📋 Features

- **Employee Management**: Create, view, edit, and delete employee records
- **User Management**: Integrated with Laravel's authentication system
- **Role-based Access Control**: Using Spatie Permissions and Filament Shield
- **Dashboard Widgets**: Visual data representation with charts and statistics
- **Category-based Organization**: Group employees by department or category
- **User Profiles**: Custom profile management for users

## 🚀 Tech Stack

- **Laravel 12**: Modern PHP framework
- **Filament 3**: Admin panel and form builder
- **MySQL**: Database management
- **Tailwind CSS**: Styling and UI components
- **Alpine.js**: JavaScript framework for interactivity
- **Livewire**: Dynamic UI interactions without writing JavaScript
- **Spatie Permissions**: Role and permission management

## 📦 Requirements

- PHP 8.2+
- Composer
- MySQL or compatible database
- Node.js and NPM

## ⚙️ Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/GabrielCanto/employee-management.git
   cd employee-management
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install JavaScript dependencies:
   ```bash
   npm install
   ```

4. Create and configure environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure your database in the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=employee_management
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Run migrations and seed the database:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. Build front-end assets:
   ```bash
   npm run build
   ```

## 🏃‍♂️ Running the Application

### Development

```bash
# Run server and vite together with concurrent processes
composer dev

# Or run them separately
php artisan serve
npm run dev
```

### Production

```bash
npm run build
php artisan serve --port=8000
```

Visit `http://localhost:8000` in your browser.

## 🔐 Default Login

After seeding the database, you can log in with:
- Email: `admin@example.com`
- Password: `password`

## 📊 Dashboard and Charts

The application includes a dashboard with several widgets:
- Employee count by category
- Recent employee additions
- User statistics

## 🧩 Project Structure

- `app/Filament/Resources` - Filament admin panel resources
- `app/Filament/Widgets` - Dashboard widgets and charts
- `app/Models` - Eloquent models
- `database/migrations` - Database migrations
- `database/seeders` - Database seeders

## 🛠️ Customization

### Adding New Employee Categories

Edit the `$categories` array in the `EmployeeSeeder.php` file to add new categories.

### Modifying Charts

Charts can be customized in `app/Filament/Widgets/EmployeesChart.php`.

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👥 Contributors

- Your Name

## 🙏 Acknowledgements

- [Laravel](https://laravel.com)
- [Filament](https://filamentphp.com)
- [Spatie](https://spatie.be)<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
