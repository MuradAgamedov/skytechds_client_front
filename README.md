# SkyTechDS Client Front

Client-facing front end built on Laravel 13, using Blade templates and a Tailwind CSS + Vite asset pipeline.

## Tech Stack

- **Backend:** PHP 8.3, Laravel 13
- **Frontend:** Blade views, Tailwind CSS 4, Vite
- **Database:** SQLite by default (configurable via `.env`)
- **Testing:** PHPUnit

## Project Structure

```
app/Http/Controllers/   Controllers (e.g. HomeController)
app/Models/              Eloquent models
resources/views/
  layout/                Base layout, head/foot includes, sidebar partial
  components/            Blade components (top bar, footer)
  pages/                 Page views (e.g. home)
resources/js/            Frontend JS entry (app.js, bootstrap.js)
resources/css/           Tailwind entry (app.css)
routes/web.php           Web routes
database/migrations/     Schema migrations
```

## Requirements

- PHP >= 8.3
- Composer
- Node.js + npm

## Getting Started

1. Install PHP dependencies:
   ```bash
   composer install
   ```
2. Copy the environment file and generate an app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Run database migrations:
   ```bash
   php artisan migrate
   ```
4. Install frontend dependencies:
   ```bash
   npm install
   ```

Alternatively, run `composer run setup` to perform all of the above in one step.

## Development

Start the PHP server, queue worker, log watcher, and Vite dev server together:

```bash
composer run dev
```

Or run the pieces individually:

```bash
php artisan serve
npm run dev
```

## Building for Production

```bash
npm run build
```

## Testing

```bash
composer run test
```

## License

This project is proprietary software for SkyTechDS.
