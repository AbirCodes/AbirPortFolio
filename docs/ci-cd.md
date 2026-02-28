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
  - Runs only if `DEPLOY_HOOK_URL` is configured
  - Calls your hosting provider deploy hook (Render/Railway/Koyeb style)
  - Lets the hosting platform pull/build/deploy from GitHub

## Required GitHub Secrets

Add this in your GitHub repository settings:

- `DEPLOY_HOOK_URL` (deploy webhook URL from your hosting provider)

## Hosting prerequisites

- Your app is connected to this GitHub repository on the hosting provider
- Build/start commands and environment variables are set on the hosting provider
- Database credentials are configured in provider environment variables

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
- You can point `DEPLOY_HOOK_URL` to any provider that supports deploy webhooks.
