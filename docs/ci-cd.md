# CI/CD Setup (GitHub Actions)

This project includes a workflow file at `.github/workflows/ci-cd.yml`.

## What it does

- **CI (on PRs and pushes to `main`)**
  - Installs PHP + Node dependencies
  - Sets up Laravel app key
  - Runs migrations using MySQL (service container)
  - Runs tests (`php artisan test`)
  - Builds frontend assets (`npm run build`)

- **CD (on push to `main`)**
  - Runs only if deploy secrets are configured
  - Connects to your server via SSH
  - Pulls latest code
  - Installs dependencies
  - Runs migrations
  - Caches Laravel config/routes/views
  - Builds frontend assets (if Node exists on server)

## Required GitHub Secrets

Add these in your GitHub repository settings:

- `DEPLOY_HOST` (example: `203.0.113.10`)
- `DEPLOY_USER` (example: `ubuntu`)
- `DEPLOY_SSH_KEY` (private SSH key for deploy user)
- `DEPLOY_PORT` (optional, defaults to `22`)
- `DEPLOY_PATH` (absolute server path of project, example: `/var/www/blog`)

## Server prerequisites

- PHP 8.1+ and Composer
- Your app code already present at `DEPLOY_PATH` and connected to your git remote
- Database configured in server `.env`
- Write permissions for storage/cache directories
- (Optional) Node/npm if you want asset build on server

## CI database details

- CI starts a MySQL 8 service container automatically.
- CI uses:
  - `DB_CONNECTION=mysql`
  - `DB_HOST=127.0.0.1`
  - `DB_PORT=3306`
  - `DB_DATABASE=blog_test`
  - `DB_USERNAME=root`
  - `DB_PASSWORD=root`

## Notes

- If deploy secrets are missing, CI still runs and CD is skipped.
- You can customize the deploy script in `.github/workflows/ci-cd.yml` for your hosting stack.
