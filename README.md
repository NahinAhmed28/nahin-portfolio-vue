# Nahin Portfolio (Laravel 11 + Vue)

This project has been restructured into a Laravel 11 architecture:

- **Live portfolio panel** at `/` rendered with Vue 3 (`resources/js/components/PortfolioApp.vue`).
- **Admin dashboard** at `/admin/dashboard` to update portfolio data.
- **API endpoint** at `/api/portfolio` that powers the live Vue portfolio.

## Main pieces

- `app/Models/PortfolioProfile.php` — stores editable portfolio data.
- `app/Http/Controllers/PortfolioController.php` — serves live panel and API.
- `app/Http/Controllers/Admin/PortfolioAdminController.php` — handles login and dashboard updates.
- `resources/views/admin/*.blade.php` — admin login + dashboard pages.
- `database/migrations/*create_portfolio_profiles_table.php` — DB schema for portfolio content.

## Setup

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

## Troubleshooting

If you see this error when running an Artisan command:

```text
Failed opening required '.../vendor/autoload.php'
```

it means dependencies are not installed yet. From the project root, run:

```bash
composer install
```

Then retry:

```bash
php artisan migrate:fresh --seed
```

On Windows PowerShell, also make sure you are inside the same folder as `artisan`
before running the commands.

Then open:

- `http://127.0.0.1:8000/` (live Vue portfolio)
- `http://127.0.0.1:8000/admin/login` (admin)
