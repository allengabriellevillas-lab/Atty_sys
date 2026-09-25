# Tellwell Resource Portal (Laravel)

The original portal UI is served as a Laravel Blade view at `/`. The source standalone HTML files remain in the project root.

## Requirements

- PHP 8.2 or later
- Composer

## Run locally

From this directory:

```powershell
cd laravel_app
php artisan serve
```

Open the URL printed by Artisan (usually http://127.0.0.1:8000).

Dependencies are committed through `composer.lock`; after a fresh checkout, run `composer install` from `laravel_app`.

The default Laravel database setting uses SQLite. Set `DB_CONNECTION` and the related `DB_*` values in `.env` if you add database-backed features.