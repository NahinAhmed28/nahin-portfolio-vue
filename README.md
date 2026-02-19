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


## Debugging `composer install` failure at `@php artisan package:discover` (exit code 255)

A `255` exit code usually means PHP hit a fatal error but Composer only shows the shell exit code.
Use this checklist to expose the real error and fix it fast:

1. Run Composer with verbose output:
   ```bash
   composer install -vvv
   ```
2. Run package discovery directly:
   ```bash
   php artisan package:discover --ansi
   ```
3. If the error is still hidden, force PHP to display startup/runtime errors:
   ```bash
   php -d display_errors=1 -d error_reporting=E_ALL artisan package:discover
   ```
4. Verify file permissions and stale cache files:
   ```bash
   ./scripts/laravel-cleanup.sh
   ```

### One-command cleanup script

This repo now includes a cleanup helper that:
- creates `.env` from `.env.example` if missing,
- generates `APP_KEY` when missing,
- clears `bootstrap/cache/*.php` and Laravel caches.

Run:

```bash
./scripts/laravel-cleanup.sh
```

### Check PHP version vs `composer.json`

This project requires `php: ^8.2`.

```bash
php -v
composer check-platform-reqs
```

If your `php -v` output is lower than `8.2`, switch PHP binaries (or update your PATH) before running Composer.

### Run migrations and seed after dependencies are healthy

After `composer install` succeeds and `.env` is configured:

```bash
php artisan migrate:fresh --seed
```

If DB credentials are wrong, update `DB_*` values in `.env` first.
