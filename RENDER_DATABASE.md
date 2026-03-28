# Render Database Settings

Use these values from your Render PostgreSQL instance:

- Host: `dpg-d740n7k50q8c73b57c40-a`
- Port: `5432`
- Database: `laravel_7i26`
- Username: `laravel_7i26_user`

Set the password only in Render environment variables (do not commit it to git):

- `DB_PASSWORD=<your-render-db-password>`

Recommended app env vars on Render:

- `DB_CONNECTION=pgsql`
- `DB_HOST=dpg-d740n7k50q8c73b57c40-a`
- `DB_PORT=5432`
- `DB_DATABASE=laravel_7i26`
- `DB_USERNAME=laravel_7i26_user`
- `DB_PASSWORD=<your-render-db-password>`

Optional single URL approach:

- `DATABASE_URL=postgresql://laravel_7i26_user:<url-encoded-password>@dpg-d740n7k50q8c73b57c40-a/laravel_7i26`

If you are using Render-provided names instead of `DB_*`, the app now also supports:

- `PGHOST`, `PGPORT`, `PGDATABASE`, `PGUSER`, `PGPASSWORD`
- `POSTGRES_HOST`, `POSTGRES_PORT`, `POSTGRES_DB`, `POSTGRES_USER`, `POSTGRES_PASSWORD`
- `DATABASE_HOST`, `DATABASE_PORT`, `DATABASE_NAME`, `DATABASE_USER`, `DATABASE_PASSWORD`

Critical check for the `fe_sendauth: no password supplied` error:

- Ensure at least one password variable is set and non-empty: `DB_PASSWORD` or `PGPASSWORD` or `POSTGRES_PASSWORD` or `DATABASE_PASSWORD`.
- Do not keep `DB_PASSWORD` or `DB_URL` as empty strings in Render. If not used, remove the variable entirely.

Startup behavior in this repo:

- On container boot, the app now runs `php artisan migrate --force`.
- It also seeds roles and ensures an admin user exists (`RolePermissionSeeder`, `AdminUserSeeder`).

Optional admin env vars:

- `APE_ADMIN_NAME` (default: `System Admin`)
- `APE_ADMIN_EMAIL` (default: `admin@ape.test`)
- `APE_ADMIN_PASSWORD` (default: `password`)
